@extends('layouts.dashboard.app')
@section('styles')
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors Styles-->
@endsection
<!--begin::Main-->
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Activity Log Login
                        </h3>
                    </div>

                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable datatable-Menu">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Ip</th>
                                <th>Waktu Login</th>
                                <th>Waktu Logout</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($activities as $activity)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $activity->authenticatable->name  ?? ''}}</td>
                                    <td>{{ $activity->ip_address  ?? ''}}</td>
                                    <td>{{ $activity->login_at->diffForHumans() ?? '' }}</td>
                                    <td>{{ $activity->logout_at ? $activity->login_at->diffForHumans() : ''  }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
        {{-- @include('components.form.menu.add') --}}
    </div>
    <!--end::Entry-->
@endsection
@section('scripts')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    {{-- <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script> --}}
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Menu:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
    <!--end::Page Scripts-->
@endsection
