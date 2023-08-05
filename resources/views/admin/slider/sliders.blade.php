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
        {{__("Add Slider")}}
      </button>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableofc" class="table table-bordered table-striped card card-scroll-horizontal">
        <thead>
          <tr>
            <th>#</th>
            <th>{{__("Image")}}</th>
            <th>{{__("name")}}</th>
            <th>{{__("Link")}}</th>
            <th>{{__("Date Begin")}}</th>
            <th>{{__("Date End")}}</th>
            <th>{{__("Offer Name")}}</th>
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
      <form action="{{route('admin.sliders.postslider')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Add Slider")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">{{__("Name")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="{{__('Name')}}" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="exampleInputFile" class="col-sm-2 col-form-label">{{__("Image")}}</label>
              <div class="col-sm-10">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="image" accept="image/jpg,image/png,image/jpeg,image/gif,image/svg,image/webp" required>
                  <label class="custom-file-label px-10" for="exampleInputFile">{{__("Choose file")}}</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="link" class="col-sm-2 col-form-label">{{__("Link")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="link" placeholder="{{__('link')}}">
              </div>
            </div>

            <div class="form-group row">
              <div class="input-group">
                <label for="link" class="col-sm-2 col-form-label">{{__("Begin")}}</label>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control" name="begin">
              </div>
            </div>

            <div class="form-group row">
              <label for="slider_offres_id" class="col-sm-2 col-form-label">{{__("Offre")}}</label>
              <div class="col-sm-10">
                <select class="form-control" id="slider_offres_id" name="slider_offres_id" required>
                  <option></option>
                  @foreach ($offres as $offre)
                    <option value="{{ $offre->id }}">{{ $offre->name_fr . "  ". $offre->name_ar }}</option>
                  @endforeach
                </select>
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
      <form action="{{route('admin.sliders.updatesliders')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Update Slider")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" id="updateinput" name="id">

            <div class="form-group row">
              <label for="exampleInputFile2" class="col-sm-2 col-form-label">{{__("Image")}}</label>
              <div class="col-sm-10">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile2" name="image" accept="image/jpg,image/png,image/jpeg,image/gif,image/svg,image/webp" required>
                  <label class="custom-file-label px-10" for="exampleInputFile2">{{__("Choose file")}}</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">{{__("Name")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="updatename" name="name" placeholder="{{__('Name')}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="link" class="col-sm-2 col-form-label">{{__("Link")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="updatelink" name="link" placeholder="{{__('Link')}}">
              </div>
            </div>
            <div class="form-group row">
              <div class="input-group">
                <label class="col-sm-2 col-form-label">{{__("Begin")}}</label>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control" name="begin" id="updatebegin">
              </div>
            </div>
            <div class="form-group row">
              <label for="slider_offres_id" class="col-sm-2 col-form-label">{{__("Offre")}}</label>
              <div class="col-sm-10">
                <select class="form-control" id="updateslider_offres_id" name="slider_offres_id" required>
                  <option></option>
                  @foreach ($offres as $offre)
                    <option value="{{ $offre->id }}" >{{ $offre->name_fr . "  ". $offre->name_ar }}</option>
                  @endforeach
                </select>
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
          <h4 class="modal-title">{{__("Supprimer Slider")}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="suppmodalbody"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <form action="{{route('admin.sliders.deletesliders')}}" method="post">
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
					url: "{{ url('/admin/sliders/slidersdatatables') }}",
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
                return `<img src="`+row.image+`" alt="" border="3"  width="100%" />`;
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
						orderable: false,
						"render": function (data, type, row) {
							return `
								<a class="btn btn-link btn-md" href="`+row.link+`" >
									{{__('link')}}
								</a>
							`;
						}
					},
          {
						"searchable": true,
						data: 'begin', name: 'begin',
						orderable: true,
					},
					{
						"searchable": true,
						data: 'end', name: 'end',
						orderable: true,
					},
          {
						"searchable": false,
						//data: 'homepage', name: 'homepage',
						orderable: false,
            "render": function (data, type, row) {
              return row.offre.name_fr+' - '+row.offre.name_ar;
						}
					},
          {
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
                <div class="d-block row one-line">
                  <button type="button" class="btn btn-info btn-md" onclick="editModal('`+row.id+`', '`+row.name+`', '`+row.link+`', '`+row.begin+`', '`+row.slider_offres_id+`')">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-md" onclick="deleteModal('`+row.id+`', '`+row.name+`')">
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
      $("#suppmodalbody").text("{{__('Supprimer Slider')}} '"+name+"' ?");
      $("#deleteinput").val();
      $("#deleteinput").val(id);
      $("#modal-warning").modal('show');
    }

    function editModal(id, name, link, begin, slider_offres_id){
      $("#updateinput").val();
      $("#updatename").val();
      $("#updatelink").val();
      $("#updatebegin").val();
      $("#updateinput").val(id);
      $("#updatename").val(name);
      $("#updatelink").val(link);
      $("#updatebegin").val(begin+"");
      $("#updateslider_offres_id").val(slider_offres_id);
      $("#modal-default").modal('show');
    }

  </script>
@endsection


