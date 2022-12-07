@extends('admin.master')
@section('title', 'Continent Index')
@section('module', 'Continent')
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
                    <th>ID</th>
                    <th>Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($continents as $item)
                <tr>
                    <td>{{$item->con_id}}</td>
                    <td>{{$item->name}}</td>
                    
                    <td class="text-center">
                      
                        <button type="button" class="btn btn-success">
                            <a href="{{route('admin.continent.edit',['id'=>$item->con_id])}}">Edit</a></button> 
                      <button type="button" class="btn btn-danger">
                            <a href="{{route('admin.continent.destroy',['id'=>$item->con_id])}}"> delete</a>
                    </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection