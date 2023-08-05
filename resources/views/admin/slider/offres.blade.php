@extends('admin.shared.app')
@section('title', 'Categories')
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
  <div class="content" style="overflow: auto;">
    <div class="d-flex justify-content-end mr-4">
      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#modal-default2">
        {{__("Add Offre")}}
      </button>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableofc" class="table table-bordered table-striped card card-scroll-horizontal">
        <thead>
          <tr>
            <th>#</th>
            <th>{{__("Name Fr")}}</th>
            <th>{{__("Name Ar")}}</th>
            <th>{{__("Desc Fr")}}</th>
            <th>{{__("Desc Ar")}}</th>
            <th>{{__("Days")}}</th>
            <th>{{__("Price")}}</th>
            <th>{{__("Options")}}</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.content -->




  <div class="modal fade" id="modal-default2">
    <div class="modal-dialog">
      <form action="{{route('admin.offres.postoffre')}}" method="post">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Add Offre")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_fr" placeholder="{{__('Name Fr')}}" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Name Ar")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_ar" placeholder="{{__('Name Ar')}}">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Description Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="desc_fr" placeholder="{{__('Description Ar')}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Description Ar")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="desc_ar" placeholder="{{__('Description Ar')}}">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Days")}}</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="days" placeholder="{{__('Days')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Price")}}</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="prix" placeholder="{{__('Price')}}" required>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <div class="input-group mb-3 direction-ltr">
              <button type="button" class="btn btn-outline-dark mr-4" data-dismiss="modal">{{__("Close")}}</button>
              <button type="submit" class="btn btn-outline-dark ml-4 bg-success">{{__("Save")}}</button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </form>

    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <form action="{{route('admin.offres.updateoffres')}}" method="post">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Upadate Offre")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" id="updateinput" name="id">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_fr" placeholder="{{__('Name Fr')}}" required id="updatename_fr">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Name Ar")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_ar" placeholder="{{__('Name Ar')}}" id="updatename_ar">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Description Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="desc_fr" placeholder="{{__('Description Fr')}}" id="updatedesc_fr">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Description Ar")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="desc_ar" placeholder="{{__('Description Ar')}}" id="updatedesc_ar">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Price")}}</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="prix" placeholder="{{__('Price')}}" id="updateprix">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">{{__("Days")}}</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="days" placeholder="{{__('Days')}}" id="updatedays" required>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <div class="input-group mb-3 direction-ltr">
              <button type="button" class="btn btn-outline-dark mr-4" data-dismiss="modal">{{__("Close")}}</button>
              <button type="submit" class="btn btn-outline-dark ml-4 bg-success">{{__("Update")}}</button>
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </form>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="modal fade" id="modal-warning">
    <div class="modal-dialog">
      <div class="modal-content bg-white">
        <div class="modal-header">
          <h4 class="modal-title">{{__("Supprimer Offre")}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="suppmodalbody"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <form action="{{ route('admin.offres.deleteoffres') }}" method="post">
            @csrf
            <div class="input-group mb-3 direction-ltr">
              <input type="hidden" class="form-control" name="id" id="deleteinput">
              <button type="button" class="btn btn-outline-dark mr-4" data-dismiss="modal">{{__("Close")}}</button>
              <button type="submit" class="btn btn-outline-dark ml-4 bg-danger">{{__("Supprimer")}}</button>
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
  <!-- bs-custom-file-input -->
  <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script>
  <script>
    $(document).ready(function() {
      $("#tableofc").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 50,
				"order": [[ 2, "desc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/offres/offresdatatables') }}",
				},
				
        "columns": [
					{ 
						"searchable": false,
						render: function (data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
          {
						"searchable": true,
						data: 'name_fr', name: 'name_fr',
						orderable: true,
					},
					{
						"searchable": true,
						data: 'name_ar', name: 'name_ar',
						orderable: true,
					},
          { 
						"searchable": true,
						data: 'desc_fr', name: 'desc_fr',
						orderable: true,
					},
					{ 
						"searchable": true,
						data: 'desc_ar', name: 'desc_ar',
						orderable: true,
					},
          { 
						"searchable": true,
						data: 'days', name: 'days',
						orderable: true,
					},
          { 
						"searchable": false,
						render: function (data, type, row) {
							return row.prix + "{{__(' DA')}}";
						}
					},
          {
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
                <div class="d-block row one-line">
                  <button type="button" class="btn btn-info btn-md" onclick="editModal('`+row.id+`', '`+row.name_fr+`', '`+row.name_ar+`', '`+row.desc_fr+`', '`+row.desc_ar+`', '`+row.days+`', '`+row.prix+`')">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-md" onclick="deleteModal('`+row.id+`', '`+row.name_fr+' - '+row.name_ar+`')">
                    <i class="fas fa-eraser"></i>
                  </button>
                  </div>
							`;
						}
					},
				]


      });
    });
    
    function deleteModal(id, name){
      $("#suppmodalbody").text();
      $("#suppmodalbody").text("{{__('Supprimer Offre')}} '"+name+"' ?");
      $("#deleteinput").val();
      $("#deleteinput").val(id);
      $("#modal-warning").modal('show');
    }

    function editModal(id, name_fr, name_ar, desc_fr, desc_ar, days, prix){
      $("#updateinput").val();
      $("#updatename_fr").val();
      $("#updatename_ar").val();
      $("#updatedesc_fr").val();
      $("#updatedesc_ar").val();
      $("#updatedays").val();
      $("#updateprix").val();

      $("#updateinput").val(id);
      $("#updatename_fr").val(name_fr);
      $("#updatename_ar").val(name_ar);
      $("#updatedesc_fr").val(desc_fr);
      $("#updatedesc_ar").val(desc_ar);
      $("#updatedays").val(days);
      $("#updateprix").val(prix);
      $("#modal-default").modal('show');
    }

  </script>
@endsection


