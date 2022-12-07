@extends('admin.master')
@section('title', 'User Index')
@section('module', 'User')
@section('action', 'Manage')

@push('jscore')
<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Page length options</h5>
        </div>

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td class="text-center">
                        <a>Edit</a>
                        <a>Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection