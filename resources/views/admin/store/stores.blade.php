@extends('admin.shared.app')

@section('title', 'Stores')

@section('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content" style="overflow: auto;"">
    <!-- /.card-header -->
    <div class="card-body">
      <!-- Messages Dropdown Menu -->
      @if(request()->is('admin/stores') || request()->is('admin/stores/banned'))
        <select class="form-control w-auto my-3" id="selectfilter">
          <option value="all">{{ __("ALL Status") }}</option>
          <option value="pending">{{ __("PENDING") }}</option>
          <option value="confirmed">{{__("ACCEPTED") }}</option>
          <option value="refused">{{ __("REJECTED") }}</option>
        </select>
      @endif
      <table id="tableof" class="table table-bordered table-striped card card-scroll-horizontal">
          <thead>
            <tr>
              <th>#</th>
              <th>{{ __("Image")}}</th>
              <th width="10%">{{__("Name")}}</th>
              <th>{{__("Phone")}}</th>
              <th>{{__("Address")}}</th>
              <th>{{__("Status")}}</th>
              <th>{{__("N° Products")}}</th>
              <th>{{__("N° Orders")}}</th>
              <th>{{__("Options")}}</th>
            </tr>
          </thead>
          <tbody></tbody>

      </table>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.content -->


  <div class="modal fade" id="modal-warning">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h4 class="modal-title">{{__("Ban Store")}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="banmodalbody"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <form action="{{route('admin.stores.updateBan')}}" method="post">
            @csrf
            <div class="input-group mb-3 direction-ltr">
              <input type="hidden" class="form-control" name="id" id="baninput">
              <button type="button" class="btn btn-outline-dark mr-4" data-dismiss="modal">{{__("Close")}}</button>
              <button type="submit" class="btn btn-outline-dark ml-4 bg-danger">{{__("Continue")}}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.modal -->


</div>
<!-- /.content-wrapper -->

@endsection

@section('script')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      var table = $("#tableof").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 50,
				"order": [[ 2, "asc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/stores/'.$urlName.'datatables') }}",
				},
        columnDefs: [{
          "defaultContent": "-",
          "targets": "_all"
        }],
				"columns": [
					{
						"searchable": false,
						render: function (data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
          {
						"searchable": false,
            orderable: false,
						"render": function (data, type, row) {
              if(row.image == null || row.image.length ==0){
                return "<div></div>";
              }
              else{
                return `<img src="`+row.image+`" alt="" border="3" height="70" width="70" />`;
              }
						}
					},

					{
						"searchable": true,
						data: 'name', name: 'name',
						orderable: true,
					},
					{
						"searchable": true,
						data: 'phone', name: 'phone',
						orderable: true,
					},
					{
						"searchable": false,
            orderable: false,
						//data: 'address', name: 'address',
						"render": function (data, type, row) {
                            var wilaya ='-',commune='-',address = '-';
                            if (row.commune != null) {
                                wilaya = row.commune.wilaya.name_fr;
                                commune = row.commune.name_fr;
                                address = row.address;
                            }
                            return `<ul>
                                <li>{{ __("wilaya")}}: `+wilaya+`</li>
                                <li>{{__("commune")}}: `+commune+`</li>
                                <li>{{__("address")}}: `+address+`</li>
                            </ul> `;
						}
					},
					{
						"searchable": false,
            orderable: false,
						//data: 'address', name: 'address',
						"render": function (data, type, row) {
              if(row.status == 'PENDING'){
                return `<select id="select_`+row.id+`" class="form-control" style="width:100px;font-size:12px" onchange="changeStatus('`+row.id+`')">
                  <option value="REFUSED">{{__("REJECTED")}}</option>
                  <option value="PENDING" selected>{{__("PENDING")}}</option>
                  <option value="ACCEPTED">{{__("ACCEPTED")}}</option>
                </select>`;
              }
              else if(row.status == 'ACCEPTED'){
                return `<select id="select_`+row.id+`" class="form-control" style="width:100px;font-size:12px" onchange="changeStatus('`+row.id+`')">
                  <option value="REFUSED">{{__("REJECTED")}}</option>
                  <option value="PENDING">{{__("PENDING")}}</option>
                  <option value="ACCEPTED" selected>{{__("ACCEPTED")}}</option>
                </select>`;
              }
              else if(row.status == 'REFUSED'){
                return `<select id="select_`+row.id+`" class="form-control" style="width:100px;font-size:12px" onchange="changeStatus('`+row.id+`')">
                  <option value="REFUSED" selected>{{__("REJECTED")}}</option>
                  <option value="PENDING">{{__("PENDING")}}</option>
                  <option value="ACCEPTED">{{__("ACCEPTED")}}</option>
                </select>`;
              }
              else{
                return row.status +"!!! unown status";
              }
						}
					},

          {
						"searchable": false,
						data: 'nprods', name: 'nprods',
						orderable: false,
					},
          {
						"searchable": false,
						data: 'norders', name: 'norders',
						orderable: false,
					},
          {
						"searchable": false,
						//data: 'theLastAllWithTypetype', name: 'theLastAllWithTypetype',
						orderable: false,
						"render": function (data, type, row) {
							if(row.ban == 0){
                return `
                  <div class="d-block row one-line">
                    <a class="btn btn-info btn-md" href="{{ url('admin/stores/details/`+ row.id +`') }}">
                      <i class="fas fa-eye"></i>
                    </a>
                    <button class="btn btn-danger btn-md" onclick="banModal('`+row.id+`', 1, '`+row.name+`')">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                `;
              }
              else{
                return `
                  <div class="d-block row one-line">
                    <a class="btn btn-info btn-md" href="{{ url('admin/stores/details/`+ row.id +`') }}">
                      <i class="fas fa-eye"></i>
                    </a>
                    <button class="btn btn-success btn-md" onclick="banModal('`+row.id+`', 0, '`+row.name+`')">
                      <i class="fas fa-lock-open"></i>
                    </button>
                  </div>
                `;
              }
						}
					},
				]
      });


      $('#selectfilter').on('change', function(){
        var urlName = {!! json_encode($urlName) !!};
        if($(this).val() == "all"){
          table.ajax.url("{{ url('/admin/stores/'.$urlName.'datatables') }}").load();
        }
        else {
          if(urlName == 'banned'){
            table.ajax.url("{{ url('/admin/stores/'.$urlName.'datatables') }}"+"/"+$(this).val()).load();
          }
          else{
            table.ajax.url("{{ url('/admin/stores') }}"+"/"+$(this).val()+"datatables").load();
          }
        }
      });

    });



    function changeStatus(id){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      });
      $.ajax({
        method: "post",
        url: "{{ url('/admin/stores/status') }}" + "/" + id,
        data: {
          "_method": "PATCH",
          "status": $("#select_"+id).val(),
        },
        success: function (data, status, xhr) {
          console.log(data);
          console.log(status);
          //alert("Success !");
          toastr.success('Success');
        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
          console.log(textStatus);
          //alert("Error !");
          toastr.error('Error !!');
        }
      });
    }

    function banModal(id, action, name){
      if(action == 0 || action == "0"){
        $("#banmodalbody").text();
        $("#banmodalbody").text(`{{__("Unban Store")}} "`+name+`" ?`);
      }
      else{
        $("#banmodalbody").text();
        $("#banmodalbody").text(`{{__("Ban Store")}} "`+name+`" ?`);
      }

      $("#baninput").val();
      $("#baninput").val(id);

      $("#modal-warning").modal('show');
    }

  </script>
@endsection


