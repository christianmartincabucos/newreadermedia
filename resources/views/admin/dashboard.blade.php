@extends('admin.layouts.admin-app')
@section('title')New Reader Media | Admin Dashboard @endsection
@section('og-title')New Reader Media | Admin @endsection
@section('content')
@push('css')
<style>
    .pending-count>.badge {
        font-size: 10px;
        font-weight: 400;
        position: absolute;
        right: -10px;
        top: -3px;
    }
</style>
@endpush
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/administrator">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box pending-count bg-info">
                    @if($mediapending > 0)
                    <span class="badge bg-danger" data-toggle="tooltip" title="There are {{ $mediapending }} pending post">{{ $mediapending}}</span>
                    @endif
                    <div class="inner">
                        <h3>{{ $mediaapprove }}</h3>

                        <p>Media</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/administrator/media" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box pending-count bg-success">
                    @if($nmagazinepending > 0)
                    <span class="badge bg-danger" data-toggle="tooltip" title="There are {{ $nmagazinepending }} pending post">{{ $nmagazinepending}}</span>
                    @endif
                    <div class="inner">
                        <h3>{{ $nmagazineapprove }}<sup style="font-size: 20px"></sup></h3>

                        <p>NMagazine</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/administrator/nmagazine" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box pending-count bg-warning">
                    @if($reviewspending > 0)
                    <span class="badge bg-danger" data-toggle="tooltip" title="There are {{ $reviewspending }} pending post">{{ $reviewspending }}</span>
                    @endif
                    <div class="inner">
                        <h3>{{ $reviewsapprove }}</h3>

                        <p>Reviews</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-comment-dots"></i>
                    </div>
                    <a href="/administrator/reviews" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box pending-count bg-danger">
                    @if($writingapprove < 0) <span class="badge bg-danger" data-toggle="tooltip" title="There are {{ $writingapprove }} pending post">{{ $writingapprove }}</span>
                        @endif
                        <div class="inner">
                            <h3>{{ $writingpending }}</h3>

                            <p>Writing tips</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="/administrator/writingtips" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box pending-count bg-primary">

                    <div class="inner">
                        <h3>{{ $users }}</h3>

                        <p>Active Users</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="/administrator/users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@push('scripts')
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
@endsection