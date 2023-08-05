@extends('admin.shared.app')
@section('title', 'About App')
@section('style')
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
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
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  {{__("About this application")}}
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h5>{{__("Francais")}}</h5>
                <textarea id="summernote_fr">
                  <strong>{{__("here")}}</strong> {{__("in French")}}
                </textarea>
                <div class="w-25">
                  <button type="submit" class="btn btn-primary btn-block" onclick="saveFr()">{{__("Save")}}</button>
                </div>
              </div>
              <div class="card-body">
                <h5>{{__("Arabe")}}</h5>
                <textarea id="summernote_ar">
                <strong>{{__("here")}}</strong> {{__("in Arabic")}}
                </textarea>
                <div class="w-25">
                  <button type="submit" class="btn btn-primary btn-block" onclick="saveAr()">{{__("Save")}}</button>
                </div>
              </div>
            </div>

            </div>
          </div>
          <!-- /.col-->
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@section('script')
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>


<script>
  $(function () {

    var about_fr = {!! json_encode($about_fr) !!};
    if(about_fr == null || about_fr.length === 0 ){
      $('#summernote_fr').summernote();
    }
    else{
      $('#summernote_fr').summernote('code', about_fr);
    }

    var about_ar = {!! json_encode($about_ar) !!};
    if(about_ar == null || about_ar.length === 0 ){
      $('#summernote_ar').summernote();
    }
    else{
      $('#summernote_ar').summernote('code', about_ar);
    }

  });

  function saveFr(){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      });
      $.ajax({
        method: "post",
        url: "{{ url('/admin/settings/about') }}",
        data: {
          "about_fr": $('#summernote_fr').summernote('code'),
        },
        success: function (data, status, xhr) {
          console.log(data);
          console.log(status);
          //alert("Success !");
          toastr.success('Text saved successfully');

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
          console.log(textStatus);
          //alert("Error !");
          toastr.error('Error saving the text !!');
        }
      });
    }

    function saveAr(){
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
      });
      $.ajax({
        method: "post",
        url: "{{ url('/admin/settings/about') }}",
        data: {
          "about_ar": $('#summernote_ar').summernote('code'),
        },
        success: function (data, status, xhr) {
          console.log(data);
          console.log(status);
          //alert("Success !");
          toastr.success('Text saved successfully');

        },
        error: function (jqXhr, textStatus, errorMessage) {
          console.log(errorMessage);
          console.log(textStatus);
          //alert("Error !");
          toastr.error('Error saving the text !!');
        }
      });
    }

</script>
@endsection



