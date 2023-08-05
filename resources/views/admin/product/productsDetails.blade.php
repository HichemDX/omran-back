@extends('admin.shared.app')
@section('title', 'Products')

@section('style')
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('plugins/ekko-lightbox/ekko-lightbox.css') }}">
  <style>
    /* Style the button and place it in the middle of the container/image */
    .imgbtn {
      position: absolute;
      top: 17%;
      left: 86%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      /* background-color: #555; */
      color: white;
      font-size: 18px;
      /* padding: 12px 24px; */
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

  </style>
@endsection

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
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">

                <div class="row">

                  @foreach ($product->images as $item)
                    <div class="col-sm-2">
                      <a href="{{ $item->name }}" data-toggle="lightbox" data-title="product image" data-gallery="gallery">
                        <img src="{{ $item->name }}" class="img-fluid mb-2" alt="product image"/>
                      </a>
                      <form action="{{route('admin.images.delete')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <button type="submit" class="imgbtn bg-danger"><strong><i class="fas fa-eraser"></i></strong></button>
                      </form>
                    </div>
                  @endforeach

                </div>
                {{--
                <div class="text-center">
                  <img class="img-fluid img-circle" width="200" src="{{ $product->images->isEmpty() ? `Pas d'image` : $product->images[0]->name  }}" alt="Pas d'image">
                </div>
                <h3 class="profile-username text-center">{{ $store->name }}</h3>

                <p class="text-muted text-center">{{ $store->status }}</p>
                --}}

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("About")}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-store mr-1"></i>{{__("Store")}}</strong>

                <p class="text-muted">
                  {{ $product->store->name }}
                </p>

                <hr>

                <strong><i class="fas fa-font mr-1"></i>{{__("Name")}}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("Name")}}: {{ $product->name }}</li>
                  </ul>
                </p>
                <hr>

                <strong><i class="fas fa-closed-captioning mr-1"></i>{{__("Description")}}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("Description")}}: {{ $product->description }}</li>
                  </ul>
                </p>
                <hr>

                <strong><i class="fas fa-file-word mr-1"></i>{{__("Informations")}}</strong>

                <p class="text-muted">
                  <ul>
                    <li>{{__("Price")}}: {{ $product->price }}</li>
                    <li>{{__("Qty")}}: {{ $product->qty }}</li>
                    <li>{{__("Min Qty")}}: {{ $product->min_qty }}</li>
                    <li>{{__("Unite")}}: {{ $product->unite->name_fr . ' - ' . $product->unite->name_ar }}</li>
                  </ul>
                </p>

                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- About Me Box -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section("script")
  <script src="{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
  <script>
    $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
    })
  </script>
@endsection
