@extends('admin.shared.app')
@section('title', 'Orders')

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
    <div class="content" style="overflow: auto;"">
      <!-- /.card-header -->
      <div class="card-body">
        <table id="tableof" class="table table-bordered table-striped card card-scroll-horizontal">
          <thead>
            <tr>
              <th>#</th>
              <th>{{__("Code")}}</th>
              <th>{{__("Store")}}</th>
              <th>{{__("Customer")}}</th>
              <th>{{__("Shipping Info")}}</th>
              <th>{{__("Shipping Costs")}}</th>
              <th>{{__("Total")}}</th>
              <th>{{__("Status")}}</th>
              <th>{{__("Options")}}</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.content -->
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
  <script>
    $(document).ready(function() {
      $("#tableof").DataTable({
        language: {
            url: "{{ asset('datatablesLang/'.Config::get('app.locale').'.json')}}"
        },
        "pagingType": "simple_numbers",
				"pageLength": 50,
				"order": [[ 1, "desc" ]],
				"processing": true,
				"serverSide": true,
				"ajax": {
					url: "{{ url('/admin/ordersdatatables') }}",
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
								<a class="btn btn-link btn-md" href="{{ url('admin/stores/details/`+ row.store.id +`') }}" >
									`+ row.store.name +`
								</a>
							`;
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
						//data: 'address', name: 'address',
						"render": function (data, type, row) {
              return `<ul>
                <li>{{__("Wilaya")}}: `+row.commune.wilaya.name_fr+`</li>
                <li>{{__("Commune")}}: `+row.commune.name_fr+`</li>
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
          {
						"searchable": false,
						//data: 'theLastAllWithTypetype', name: 'theLastAllWithTypetype',
						orderable: false,
						"render": function (data, type, row) {
							return `
								<a class="btn btn-info btn-md" href="{{ url('admin/orders/details/`+ row.id +`') }}" >
									<i class="fas fa-eye"></i>
								</a>
							`;
						}
					},
				]
      });
    });

  </script>
@endsection




