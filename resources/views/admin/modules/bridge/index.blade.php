@extends('admin.master')
@section('title', 'Bridge Index')
@section('module', 'Bridge')
@section('action', 'Manage')

@push('jscore')
<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><strong>Member List</strong></h5>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><strong>Gallery</strong></h5>
                </div>
        
                <table class="table datatable-show-all">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bridge Name</th>
                            <th>Country</th>
                            
                            <th><strong>Actions</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($bri as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->country}}</td>
                       
                            <td class="text-center">
                                <button type="button" class="btn btn-success">
                                    <a href="{{route('admin.bridge.edit',['id'=>$item->bri_id])}}">Edit</a></button> 
                              <button type="button" class="btn btn-danger">
                                    <a href="{{route('admin.bridge.destroy',['id'=>$item->bri_id])}}"> delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection