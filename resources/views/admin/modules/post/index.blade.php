@extends('admin.master')
@section('title', 'Post Index')
@section('module', 'Post')
@section('action', 'Manage') 

@push('jscore')
<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Post</h5>
        </div>

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Bridge</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_date</th>
                    
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->bridge}}</td>
                    <td>{{ $item->title}}</td>
                    <td>{{ $item->content}}...</td>
                    <td>{{ $item->created_at}}</td>
                    
                    <td class="text-center">
                        <a>Edit</a>
                        <a>Delete</a>
                    </td>
                </tr>
              
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection