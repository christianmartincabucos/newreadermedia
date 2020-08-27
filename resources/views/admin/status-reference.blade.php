@extends('admin.layouts.admin-app')
@section('title')New Reader Media | Admin Status Reference @endsection
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
<div id="app">
    <status-reference></status-reference>
</div>
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