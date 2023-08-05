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
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-fluid img-circle" width="200" height="200" src="{{ $store->image }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $store->name }}</h3>

                <p class="text-muted text-center">{{ __($store->status) }}</p>

                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("About") }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-phone mr-1"></i> {{__("Phone") }}</strong>

                <p class="text-muted">
                  {{ $store->phone }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>{{__("Address") }}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("wilaya") }}: {{ $store->commune != null ? $store->commune->wilaya->name_fr : '' }}</li>
                    <li>{{__("commune") }}: {{ $store->commune != null ? $store->commune->name_fr : '' }}</li>
                    <li>{{__("address") }}: {{ $store->address }}</li>
                  </ul>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>{{__("Location") }}</strong>

                <p class="text-muted">
                  <ul>
                    <li>{{__("longitude") }}: {{ $store->longitude }}</li>
                    <li>{{__("latitude") }}: {{ $store->latitude }}</li>
                  </ul>
                </p>

                <hr>

                <strong><i class="fas fa-shopping-cart mr-1"></i>{{__("Minimun Per commande") }}</strong>

                <p class="text-muted">
                  <ul>
                    <li>{{__("Total") }}: {{ $store->min_amount_order }}</li>
                  </ul>
                </p>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("Access") }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('admin/stores/statusBan') ."/". $store->id }}" method="post">
                  @csrf
                  @method('PATCH')
                  {{-- <strong><i class="fas fa-map-marker-alt mr-1"></i> Status</strong> --}}
                  <p class="text-muted">
                    <div class="w-25">
                      <select class="form-control"  name="status">
                        <option value="REFUSED" {{ $store->status == "REFUSED" ? 'selected' : '' }}>{{ __("REJECTED") }}</option>
                        <option value="PENDING" {{ $store->status == "PENDING" ? 'selected' : '' }}>{{__("PENDING") }}</option>
                        <option value="ACCEPTED" {{ $store->status == "ACCEPTED" ? 'selected' : '' }}>{{__("ACCEPTED") }}</option>
                      </select>
                    </div>

                  </p>

                  <hr>

                  {{-- <strong><i class="fas fa-map-marker-alt mr-1"></i>Ban</strong> --}}
                  <p class="text-muted">
                    <div class="w-25">
                      <select class="form-control" value="{{ $store->ban }}" name="ban">
                        <option value="1" {{ $store->ban == 1 ? 'selected' : '' }}>{{__("Banned") }}</option>
                        <option value="0" {{ $store->ban == 0 ? 'selected' : '' }}>{{__("Not Banned") }}</option>
                      </select>
                    </div>
                  </p>
                  <hr>
                  <div class="w-25">
                    <button type="submit" class="btn btn-primary btn-block">{{__("Save") }}</button>
                  </div>

                </form>

              </div>
              <!-- /.card-body -->
            </div>


            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("Products") }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="content" style="overflow: auto;">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="tableofprods" class="table table-bordered table-striped card card-scroll-horizontal">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>{{__("Name") }}</th>
                          <th>{{__("Description") }}</th>
                          <th>{{__("Price") }}</th>
                          <th>{{__("QTY") }}</th>
                          <th>{{__("Min QTY") }}</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("Orders") }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="content" style="overflow: auto;">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="tableoforders" class="table table-bordered table-striped card card-scroll-horizontal">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>{{__("Code") }}</th>
                          <th>{{__("Customer") }}</th>
                          <th>{{__("Shipping Info") }}</th>
                          <th>{{__("Shipping Costs") }}</th>
                          <th>{{__("Total") }}</th>
                          <th>{{__("Status") }}</th>
                        </tr>
                      </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
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
  </div>

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
  <script>
    $(document).ready(function() {
      $("#tableofprods").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 10,
				"order": [[ 1, "asc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/productsdatatables/'.$store->id) }}",
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
						data: 'name', name: 'name',
						orderable: true,
					},
					{
						"searchable": true,
						data: 'description', name: 'description',
						orderable: true,
					},

          {
						"searchable": false,
						render: function (data, type, row) {
							return row.price + "{{__(' DA')}}";
						}
					},
          {
						"searchable": false,
						data: 'qty', name: 'qty',
						orderable: false,
					},
          {
						"searchable": false,
						data: 'min_qty', name: 'min_qty',
						orderable: true,
					}
				]
      });
    });

    $(document).ready(function() {
      $("#tableoforders").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 10,
				"order": [[ 1, "desc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/ordersstoredatatables/'.$store->id) }}",
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
						data: 'code', name: 'code',
						orderable: true,
					},
					{
						"searchable": true,
						data: 'customer.name', name: 'customer.name',
						orderable: true,
					},
          {
						"searchable": false,
            orderable: false,
						//data: 'address', name: 'address',
						"render": function (data, type, row) {
              return `<ul>
                <li>wilaya: `+row.commune.wilaya.name_fr+`</li>
                <li>commune: `+row.commune.name_fr+`</li>
                <li>address: `+row.address+`</li>
              </ul> `;
						}
					},
          {
						"searchable": false,
						render: function (data, type, row) {
							return row.shipping_cost + "{{__(' DA')}}";
						}
					},
          {
						"searchable": false,
						render: function (data, type, row) {
							return row.grand_total + "{{__(' DA')}}";
						}
					},
          {
						"searchable": false,
            orderable: false,
						render: function (data, type, row) { '', '', ''
              if(row.status == "ACCEPTED"){ return "{{ __('ACCEPTED') }}"; }
              else if(row.status == "PENDING"){ return "{{ __('PENDING') }}"; }
              else if(row.status == "PROCESSING"){ return "{{ __('PROCESSING') }}"; }
              else if(row.status == "PREPARED"){ return "{{ __('PREPARED') }}"; }
              else if(row.status == "DISPATCHED"){ return "{{ __('DISPATCHED') }}"; }
              else if(row.status == "DELIVERED"){ return "{{ __('DELIVERED') }}"; }
              else if(row.status == "CANCELED"){ return "{{ __('CANCELED') }}"; }
              else{ return "{{ __('PENDING') }}"; }
						}
					}
				]
      });
    });

  </script>
@endsection
