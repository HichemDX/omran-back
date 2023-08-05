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
        {{__("Add Unit")}}
      </button>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableofc" class="table table-bordered table-striped card card-scroll-horizontal">
        <thead>
          <tr>
            <th>#</th>
            <th>{{__("Name FR")}}</th>
            <th>{{__("Name AR")}}</th>
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

      <form action="{{route('admin.unites.postunite')}}" method="post">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Add Unit")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="name_fr" class="col-sm-3 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name_fr" placeholder="{{__('Name Fr')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="name_ar" class="col-sm-3 col-form-label">{{__("Name Ar")}}</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="name_ar" placeholder="{{__('Name Ar')}}">
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
      <form action="{{route('admin.unites.updateunite')}}" method="post">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Update Unit")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" id="updateinput" name="id">
            <div class="form-group row">
              <label for="name_fr" class="col-sm-3 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="name_fr" name="name_fr" placeholder="{{__('Name Fr')}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="name_ar" class="col-sm-3 col-form-label">{{__("Name Ar")}}</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="{{__('Name Ar')}}">
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
          <h4 class="modal-title">{{__("Supprimer Unit")}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="suppmodalbody"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <form action="{{route('admin.unites.deleteunite')}}" method="post">
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
					url: "{{ url('/admin/unites/unitesdatatables') }}",
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
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
                <div class="d-block row">
                  <button type="button" class="btn btn-info btn-md" onclick="editModal('`+row.id+`','`+row.name_fr+`','`+row.name_ar+`')">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-md" onclick="deleteModal('`+row.id+`', '`+row.name_fr+" "+row.name_ar+`')">
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
      $("#suppmodalbody").text("{{__('Supprimer Unit')}} '"+name+"' ?");
      $("#deleteinput").val();
      $("#deleteinput").val(id);
      $("#modal-warning").modal('show');
    }

    function editModal(id, name_fr, name_ar){
      $("#updateinput").val();
      $("#name_fr").val();
      $("#name_ar").val();

      $("#updateinput").val(id);
      $("#name_fr").val(name_fr);
      $("#name_ar").val(name_ar);
      
      $("#modal-default").modal('show');
    }

  </script>
@endsection


