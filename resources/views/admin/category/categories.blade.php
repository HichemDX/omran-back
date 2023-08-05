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
        {{__("Add")}} @if(request()->is('admin/subCategories')) {{__("Sub")}} @endif {{__("Category")}}
      </button>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
      <table id="tableofc" class="table table-bordered table-striped card card-scroll-horizontal">
        <thead>
          <tr>
            <th>#</th>
            @if(request()->is('admin/categories'))<th>{{__("Icon")}}</th>
            @endif
            <th>{{__("Name FR")}}</th>
            <th>{{__("Name AR")}}</th>
            @if(request()->is('admin/categories'))<th>{{__("Homepage")}}</th>
            @endif
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

      <form action="{{route('admin.postcategories')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Add Category")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="name_fr" class="col-sm-2 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_fr" placeholder="{{__('Name Fr')}}" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="name_ar" class="col-sm-2 col-form-label">{{__('Name Ar')}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_ar" placeholder="{{__('Name Ar')}}">
              </div>
            </div>

            @if(request()->is('admin/categories'))
              <div class="form-group">
                <label for="exampleInputFile">{{__('Icon')}}</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="icon" accept="image/jpg,image/png,image/jpeg,image/gif,image/svg,image/webp" required>
                    <label class="custom-file-label px-10" for="exampleInputFile">{{__('Choose file')}}</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">{{__("Homepage")}}</label>
                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-3 pt-2">
                  <input type="checkbox" class="custom-control-input" name="homepage" id="homepageadd" value="0">
                  <label class="custom-control-label" for="homepageadd"></label>
                </div>
              </div>
            @else
            <input type="hidden" class="form-control" name="homepage" value="0">
            @endif
            @if(request()->is('admin/subCategories'))
              <div class="form-group row">
                <label for="parent" class="col-sm-2 col-form-label">{{__("Parent")}}</label>
                <div class="col-sm-10">
                  <select class="form-control" name="parent" required>
                    <option></option>
                    @foreach ($categories as $categ)
                      @if(!$categ->parent)<option value="{{ $categ->id }}">{{ $categ->name_fr . "  ". $categ->name_ar }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>
              </div>
            @endif


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
      <form action="{{route('admin.updatecategories')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-content bg-white">
          <div class="modal-header">
            <h4 class="modal-title">{{__("Update")}} @if(request()->is('admin/subCategories')) {{__("Sub")}}- @endif {{__("Category")}}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" class="form-control" id="updateinput" name="id">
            <div class="form-group row">
              <label for="name_fr" class="col-sm-2 col-form-label">{{__("Name Fr")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name_fr" name="name_fr" placeholder="{{__("Name Fr")}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="name_ar" class="col-sm-2 col-form-label">{{__("Name Ar")}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="{{__("Name Ar")}}">
              </div>
            </div>
            @if(request()->is('admin/categories'))
            <div class="form-group row">
              <label for="exampleInputFile2">{{__("Icon")}}</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile2" name="icon" accept="image/jpg,image/png,image/jpeg,image/gif,image/svg,image/webp">
                  <label class="custom-file-label px-10" for="exampleInputFile2">{{__("Choose file")}}</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label mr-3">{{__("Homepage")}}</label>
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ml-3 pt-2">
                <input type="checkbox" class="custom-control-input" name="homepage" id="homepage">
                <label class="custom-control-label" for="homepage"></label>
              </div>
            </div>
            @endif
            <div class="form-group row">
              <label for="parent" class="col-sm-2 col-form-label">{{__("Parent")}}</label>
              <div class="col-sm-10">
                <select class="form-control" id="parent" name="parent">
                  <option></option>
                  @foreach ($categories as $categ)
                  @if(!$categ->parent) <option value="{{ $categ->id }}">{{ $categ->name_fr . "  ". $categ->name_ar }}</option>
                  @endif
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
          <h4 class="modal-title">{{__("Supprimer Category")}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="suppmodalbody"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <form action="{{route('admin.deletecategories')}}" method="post">
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
					url: "{{ url('/admin/'.$urlName.'datatables') }}",
				},
				
        "columns": [
					{ 
						"searchable": false,
						render: function (data, type, row, meta) {
							return meta.row + meta.settings._iDisplayStart + 1;
						}
					},
          @if(request()->is('admin/categories'))
          {
						"searchable": false,
            orderable: false,
						"render": function (data, type, row) {
              if(row.icon == null || row.icon.length ==0){
                return "<div></div>";
              }
              else{
                return `<img src="`+row.icon+`" alt="" border="3" height="100" width="100" />`;
              }
						}
					},
          @endif
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
          @if(request()->is('admin/categories'))
          {
						"searchable": false,
						//data: 'homepage', name: 'homepage',
						orderable: false,
            "render": function (data, type, row) {
              return `<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" class="custom-control-input" id="customSwitch`+row.id+`" onChange="switched(`+row.id+`)" `+ (row.homepage == 0 ? '' : "checked") +`>
                <label class="custom-control-label" for="customSwitch`+row.id+`"></label>
              </div>
              `;
						}
					},
          @endif
          {
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
                <div class="d-block row">
                  <button type="button" class="btn btn-info btn-md" onclick="editModal('`+row.id+`','`+row.name_fr+`','`+row.name_ar+`','`+row.icon+`','`+row.homepage+`','`+row.parent+`')">
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
      $("#suppmodalbody").text(`{{__("Supprimer Category")}} "`+name+`" ?`);
      $("#deleteinput").val();
      $("#deleteinput").val(id);
      $("#modal-warning").modal('show');
    }

    function editModal(id, name_fr, name_ar, icon, homepage, parent){
      console.log(homepage);
      $("#updateinput").val();
      $("#name_fr").val();
      $("#name_ar").val();
      $("#icon").val();
      //$("#homepage").val();
      $("#homepage").prop( "checked", false );
      $("#parent").val();
      $("#updateinput").val(id);
      $("#name_fr").val(name_fr);
      $("#name_ar").val(name_ar);
      $("#icon").val(icon);
      //$("#homepage").val(homepage);
      $("#parent").val(parent);
      if(homepage == 1) $("#homepage").prop( "checked", true );
      else $("#homepage").prop( "checked", false );
      $("#modal-default").modal('show');
    }


    function switched(id){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      });
      $.ajax({
        method: "post",
        url: "{{ url('/admin/categoriesonoff') }}/"+id,
        data: {
          "_method": "PATCH",
          "homepage": $("#customSwitch"+id).is(':checked') == true ? 1 : 0 ,
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

    $('input[type="checkbox"]').change(function(){
      this.value = (Number(this.checked));
    });


  </script>
@endsection


