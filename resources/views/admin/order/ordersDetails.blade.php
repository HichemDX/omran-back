@extends('admin.shared.app')
@section('title', 'Orders')

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

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("About")}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-shopping-cart mr-1"></i>{{__("Order")}}</strong>

                <p class="text-muted">
                  <ul>
                    <li class="my-1">{{__("Code")}}: {{ $order->code }}</li>
                    <li class="my-1">{{__("Shipping Cost")}}: {{ $order->shipping_cost }}</li>
                    <li class="my-1">{{__("Total")}}: {{ $order->grand_total . __(" DA")}}</li>
                    <li class="my-1">{{__("Status")}}: {{ __($order->status) }}</li>
                    <li class="my-1">{{__("Date Order")}}: {{ $order->created_at }}</li>
                  </ul>
                </p>

                <hr>

                <strong><i class="fas fa-store mr-1"></i>{{__("Store")}}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("Name")}}: <a class="btn btn-link"  href="{{ url('admin/stores/details/'.$order->store->id) }}">{{ $order->store->name }}</a></li>
                    <li>{{__("Phone")}}: {{ $order->store->phone }}</li>
                    <li>{{__("Address")}}:
                      <ul>
                        <li>{{__("Wilaya")}}: {{ $order->store->commune->wilaya->name_fr }}</li>
                        <li>{{__("Commune")}}: {{ $order->store->commune->name_fr }}</li>
                        <li>{{__("Address")}}: {{ $order->store->address }}</li>
                      </ul>
                    </li>
                  </ul>
                </p>

                <hr>

                <strong><i class="fas fa-user mr-1"></i>{{__("Customer")}}</strong>

                <p class="text-muted">
                  <ul>
                    <li>{{__("Name")}}:
                      @if($order->customer)
                        <a class="btn btn-link"  href="{{ url('admin/customers/details/'.$order->customer->id) }}">{{ $order->customer->name }}</a>
                      @else
                        {{ $order->name }}
                      @endif
                    </li>
                    <li>{{__("Phone")}}: {{ $order->phone }}</li>
                    <li>{{__("Wilaya")}}: {{ $order->commune->wilaya->name_fr }}</li>
                    <li>{{__("Commune")}}: {{ $order->commune->name_fr }}</li>
                    <li>{{__("Address")}}: {{ $order->address }}</li>
                  </ul>
                </p>

                <hr>

                <strong><i class="fas fa-tag mr-1"></i>{{__("Products")}}</strong>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>{{__("Name")}}</th>
                        <th>{{__("Store")}}</th>
                        <th >{{__("Unite")}}</th>
                        <th>{{__("Price U")}}</th>
                        <th>{{__("Qty")}}</th>
                        <th>{{__("Sub Total")}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($order->products as $item)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><a class="btn btn-link"  href="{{ url('admin/products/details/'.$item->id) }}">{{ $item->name }}</a></td>
                          <td><a class="btn btn-link"  href="{{ url('admin/stores/details/'.$item->store->id) }}">{{ $item->store->name }}</a></td>
                          <td>{{ $item->unite->name_fr  }}</td>
                          <td>{{ $item->pivot->price . __(' DA') }}</td>
                          <td>{{ $item->pivot->qty }}</td>
                          <td>{{ ($item->pivot->qty * $item->pivot->price) . __(' DA')}}</td>
                        </tr>
                      @empty
                        <tr>
                          <td></td>
                          <td colspan="5" style="text-align: center">{{__("Table is empty")}}</td>
                          <td></td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
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
