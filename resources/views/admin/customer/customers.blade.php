@extends('admin.shared.app')
@section('title', 'Customers')

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
        <table id="tableof" class="table table-bordered table-striped card card-scroll-horizontal">
          <thead>
            <tr>
              <th>#</th>
              <th>{{__("Image")}}</th>
              <th>{{__("Name")}}</th>
              <th>{{__("Phone")}}</th>
              <th>{{__("Address")}}</th>
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
            <h4 class="modal-title">{{__("Ban Customer")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="banmodalbody"></p>
          </div>
          <div class="modal-footer justify-content-between">
            <form action="{{route('admin.customers.updateBan')}}" method="post">
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
      $("#tableof").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 50,
				"order": [[ 2, "desc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/customers/'.$urlName.'datatables') }}",
				},
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
                return `<img src="`+row.image+`" alt="" border="3" height="100" width="100" />`;
              }
						}
					},
					{
						"searchable": true,
						data: 'name', name: 'name',
						orderable: true,
					},

          {
						"searchable": false,
						data: 'phone', name: 'phone',
						orderable: false,
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
                  <a class="btn btn-info btn-md" href="{{ url('admin/customers/details/`+ row.id +`') }}" >
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
                  <a class="btn btn-info btn-md" href="{{ url('admin/customers/details/`+ row.id +`') }}" >
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
    });

    function banModal(id, action, name){
      if(action == 0 || action == "0"){
        $("#banmodalbody").text();
        $("#banmodalbody").text(`{{__("Unban Customer")}} "`+name+`" ?`);
      }
      else{
        $("#banmodalbody").text();
        $("#banmodalbody").text(`{{__("Ban Customer")}} "`+name+`" ?`);
      }

      $("#baninput").val();
      $("#baninput").val(id);

      $("#modal-warning").modal('show');
    }

  </script>
@endsection


