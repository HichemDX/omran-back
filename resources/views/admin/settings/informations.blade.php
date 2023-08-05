@extends('admin.shared.app')
@section('title', 'App Informations')
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
        <div class="card px-3 py-4">
            <form action="{{route('admin.settings.postinformations')}}" method="post" class="w-75 m-auto">
                @csrf
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">{{__("Address")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="{{__('Address')}}" value="{{ $informations == null ? '' : $informations->address }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">{{__("Phone")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" placeholder="{{__('Phone')}}" value="{{ $informations == null ? '' : $informations->phone }}">
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">{{__("Email")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="{{__('Email')}}" value="{{ $informations == null ? '' : $informations->email }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">{{__("Facebook")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook" placeholder="{{__('Facebook')}}" value="{{ $informations == null ? '' : $informations->facebook }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">{{__("Instagram")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="instagram" placeholder="{{__('Instagram')}}" value="{{ $informations == null ? '' : $informations->instagram }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="twitter" class="col-sm-2 col-form-label">{{__("Twitter")}}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter" placeholder="{{__('Twitter')}}" value="{{ $informations == null ? '' : $informations->twitter }}">
                    </div>
                </div>

                <hr>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-info m-auto">{{__("Save")}}</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection