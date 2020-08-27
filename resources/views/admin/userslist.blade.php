@extends('admin.layouts.admin-app')
@section('title')New Reader Media | Admin User List @endsection
@section('og-title')New Reader Media | Admin @endsection
@section('content')

@push('css')
<style>
    .modal-xl {
        max-width: 100% !important;
        max-height: 100% !important;
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
                <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/administrator">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
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
                        <h3 class="card-title">List od Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if($errors->count() > 0)
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            @foreach($errors->all() as $error)
                            <strong>Success!</strong>
                            &nbsp;{{ $error }}
                            @endforeach
                        </div>
                        @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th align="center">Name</th>
                                    <th align="center">Email</th>
                                    <th align="center">User Type</th>
                                    <th align="center">Status</th>
                                    <th align="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $data)
                                <tr>
                                    <td align="center">{{ $data->name }}</td>
                                    <td align="center">{{ $data->email }}</td>
                                    <td align="center">{{ $data->user_type }}</td>
                                    <td align="center"><span class="{{ $data->status == 1 ? 'btn-primary':'btn-warning'}} rounded p-1">{{ $data->status == 1 ? 'Active':'Inactive'}}</span></td>
                                    <td align="center">
                                        <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="userUpdate({ status :'{{ $data->status }}', id : '{{ $data->id }}'} )"><i class="fas fa-user-edit"></i> Edit</button>
                                        <form id="user-form{{ $data->id }}" action="{{ route('user.update', $data->id) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" id="status" name="status" value="2">
                                        </form>
                                    </td>
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
</section>

@push('scripts')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });

    function userUpdate(data) {
        // alert(data.status)
        document.getElementById("status").value = data.status == 1 ? 2 : 1;
        if (confirm("Are you sure you want to inactive this account?")) {
            document.getElementById(`user-form${data.id}`).submit();
        }
        return;
    }
</script>
@endpush

@endsection