@extends('admin.shared.app')
@section('title', 'Dashboard')
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
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $storeCount }}</h3>
              <p>{{ __("Stores") }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="{{ route('admin.stores.all') }}" class="small-box-footer direction-ltr">{{ __("More info")}} <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $customerCount }}</h3>

              <p>{{ __("Customers") }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('admin.customers.all') }}" class="small-box-footer direction-ltr">{{ __("More info")}} <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $productCount }}</h3>

              <p>{{ __("Products") }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-pricetag"></i>
            </div>
            <a href="{{ route('admin.products') }}" class="small-box-footer direction-ltr">{{ __("More info")}} <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $categoryCount }}</h3>

              <p>{{__("Categories") }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('admin.categories') }}" class="small-box-footer direction-ltr">{{ __("More info")}} <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $orderCount }}</h3>

              <p>{{__("Orders")}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('admin.orders') }}" class="small-box-footer direction-ltr">{{ __("More info")}} <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ __("Latest Pending Stores") }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body card-scroll-horizontal">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>{{__("Image") }}</th>
                    <th>{{__("Name") }}</th>
                    <th>{{__("Phone") }}</th>
                    <th>{{__("Address") }}</th>
                    <th>{{ __("Status") }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($stores as $index => $store)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td><img src="{{ $store->image }}" alt="{{ $store->name }}" border="3" height="100" width="100"/></td>
                      <td>{{ $store->name }}</td>
                      <td>{{ $store->phone }}</td>
                      <td>
                        <ul>
                          <li>{{ __("wilaya") }}: {{ $store->commune != null ? $store->commune->wilaya->name_fr : ''}}</li>
                          <li>{{__("commune") }}: {{ $store->commune != null ? $store->commune->name_fr : ''}}</li>
                          <li>{{__("address") }}: {{ $store->address }}</li>
                        </ul>
                      </td>
                      <td>{{ __($store->status) }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ __("Latest Orders")}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body card-scroll-horizontal">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>{{ __("Code") }}</th>
                    <th>{{  __("Store") }}</th>
                    <th>{{__("Customer") }}</th>
                    <th>{{__("Shipping Info") }}</th>
                    <th>{{ __("Shipping Costs") }}</th>
                    <th>{{ __("Total") }}</th>
                    <th>{{ __("Status") }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $index => $order)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $order->code }}</td>
                      <td>
                        <a class="btn btn-link btn-md" href="{{ url('admin/stores/details/'.$order->store->id) }}" >
                          {{ $order->store->name }}
                        </a>
                      </td>
                      <td>{{ $order->name }}</td>
                      <td>
                        <ul>
                          <li>{{ __("wilaya") }}: {{ $order->commune->wilaya->name_fr}}</li>
                          <li>{{ __("commune") }}: {{ $order->commune->name_fr }}</li>
                          <li>{{ __("address") }}: {{ $order->address }}</li>
                        </ul>
                      </td>
                      <td>{{ $order->shipping_cost . __(' DA')}}</td>
                      <td>{{ $order->grand_total . __(' DA')}}</td>
                      <td>{{ __($order->status) }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection


@section('script')
  <!-- OPTIONAL SCRIPTS -->
  <!-- <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script> -->
  <!-- Summernote -->
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script> -->
@endsection
