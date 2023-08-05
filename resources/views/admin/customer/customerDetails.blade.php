@extends('admin.shared.app')

@section('title', 'Customers')

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
                  <img class="img-fluid img-circle" width="200" height="200" src="{{ $customer->image }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $customer->name }}</h3>

                <p class="text-muted text-center">{{ $customer->ban == 0 ? __("Not Banned") : __("Banned") }}</p>

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
                <strong><i class="fas fa-phone mr-1"></i> {{__("Phone")}}</strong>

                <p class="text-muted">
                  {{ $customer->phone }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i>{{__("Address")}}</strong>
                <p class="text-muted">
                  <ul>
                    <li>{{__("Address")}}: {{ $customer->address }}</li>
                    <li>{{__("Commune")}}: {{ $customer->commune != null ? $customer->commune->name_fr : '' }}</li>
                    <li>{{__("Wilaya")}}: {{ $customer->commune != null ? $customer->commune->wilaya->name_fr : '' }}</li>
                  </ul>
                </p>


                <hr>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("Access")}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('admin/customers/ban') ."/". $customer->id }}" method="post">
                  @csrf
                  @method('PATCH')

                  <strong>
                    {{__("Ban")}}
                  </strong>
                  <p class="text-muted">
                    <div class="w-25">
                      <select class="form-control" value="{{ $customer->ban }}" name="ban">
                        <option value="1" {{ $customer->ban == 1 ? 'selected' : '' }}>{{__("Banned")}}</option>
                        <option value="0" {{ $customer->ban == 0 ? 'selected' : '' }}>{{__("Not Banned")}}</option>
                      </select>
                    </div>
                  </p>
                  <hr>
                  <div class="w-25">
                    <button type="submit" class="btn btn-primary btn-block">{{__("Save")}}</button>
                  </div>

                </form>

              </div>
              <!-- /.card-body -->
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{__("Orders")}}</h3>
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
                          <th>{{__("Code")}}</th>
                          <th>{{__("Customer")}}</th>
                          <th>{{__("Store")}}</th>
                          <th>{{__("Shipping Info")}}</th>
                          <th>{{__("Shipping Costs")}}</th>
                          <th>{{__("Total")}}</th>
                          <th>{{__("Status")}}</th>
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
					url: "{{ url('/admin/orderscustomerdatatables/'.$customer->id) }}",
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
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
								<a class="btn btn-link btn-md" href="{{ url('admin/customers/details/`+ row.customer.id +`') }}" >
									`+ row.customer.name +`
								</a>
							`;
						}
					},
          {
						"searchable": false,
						orderable: false,
						"render": function (data, type, row) {
							return `
								<a class="btn btn-link btn-md" href="{{ url('admin/stores/details/`+ row.store.id +`') }}" >
									`+ row.store.name +`
								</a>
							`;
						}
					},
          {
						"searchable": false,
            orderable: false,
						//data: 'address', name: 'address',
						"render": function (data, type, row) {
              return `<ul>
                <li>{{__("Wilaya")}}: `+row.commune?.wilaya.name_fr+`</li>
                <li>{{__("Commune")}}: `+row.commune.namefr+`</li>
                <li>{{__("Address")}}: `+row.address+`</li>
              </ul> `;
						}
					},
          {
						"searchable": false,
						render: function (data, type, row) {
							return row.shipping_cost + '{{__(" DA")}}';
						}
					},
          {
						"searchable": false,
						render: function (data, type, row) {
							return row.grand_total + '{{__(" DA")}}';
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
					},
				]
      });
    });

  </script>
@endsection
