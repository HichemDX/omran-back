@extends('admin.shared.app')
@section('title', 'Stores')

@section('content')

<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      

      <div class="container-fluid">
        @if (session('success')) <div class="alert alert-success" style="padding:30px;">{{ __("Success") }}</div>
        @elseif  (session('error')) <div class="alert alert-danger" style="padding:30px;">{{ __("Old password is wrong !!!!!!") }}</div>
        @endif

        <div class="row">
          <div class="col-md-12">

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("About")}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> {{__("Name")}}</strong>

                <p class="text-muted">
                  {{ $user->name }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>{{__("Credentials")}}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("Email")}}: {{ $user->email }} - <button class="btn btn-link" data-toggle="modal" data-target="#modal-default2">{{__("Change")}}</button></li>
                    <li>{{__("Password")}}: <button class="btn btn-link" data-toggle="modal" data-target="#modal-default">{{__("Change")}}</button></li>
                  </ul>
                </p>
                <hr>

              </div>
              <!-- /.card-body -->
            </div>            

            

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-default2">
      <div class="modal-dialog">
        <form action="{{route('admin.profile.updateemail')}}" method="post">
          @csrf
          <div class="modal-content bg-white">
            <div class="modal-header">
              <h4 class="modal-title">{{__("Modifier Email")}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="old_mail" class="col-sm-3 col-form-label">{{__("Old Email")}}</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" disabled value="{{ $user->email }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="name_ar" class="col-sm-3 col-form-label">{{__("New Email")}}</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" placeholder="{{__('Email')}}" required>
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
        <form action="{{route('admin.profile.updatepassword')}}" method="post">
          @csrf
          <div class="modal-content bg-white">
            <div class="modal-header">
              <h4 class="modal-title">{{__("Modifier Password")}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="name_ar" class="col-sm-4 col-form-label">{{__("Old Password")}}</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="oldpassword" placeholder="{{__('Old Password')}}" required>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="name_ar" class="col-sm-4 col-form-label">{{__("New Password")}}</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="password" placeholder="{{__('Password')}}" required>
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


  </div>

@endsection

