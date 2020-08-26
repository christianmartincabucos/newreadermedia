@extends('admin.layouts.admin-app')
@section('title')New Reader Media | Admin Dashboard @endsection
@section('og-title')New Reader Media | Admin @endsection
@section('content')

@push('css')
<style>
    .modal-xl {
        max-width: 100%!important;
        max-height: 100%!important;
    }

    .dataTables_filter {
        justify-content: flex-end !important;
        display: flex !important;
    }

    .box {
        margin-bottom: 22px;
        /* background-color: #fff; */
        background-color: rgba(0, 0, 0, 0.9);
        border: 1px solid transparent;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        color: white !important;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
    }
</style>
@endpush
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Blog | Media</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/administrator">Home</a></li>
                    <li class="breadcrumb-item active">Media</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pending</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        @include('templates.media-show')
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
</section>
@push('scripts')
<script>
    /* $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    }); */
</script>
@endpush

@endsection