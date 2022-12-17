@extends('admin.master')
@section('title', 'Country Index')
@section('module', 'Country')
@section('action', 'Manage')

@push('jscore')

<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><strong>Country List</strong></h5>
        </div>

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Country Name</th>
                    <th>Continent</th>                  
                    <th>Image</th>
                   <th>Created_at</th>
                    <th><strong>Actions</strong></th>
                </tr>
            </thead>
            <tbody> 
                
                @foreach ($country as $item)
                <tr>
                    <td >{{ $loop->iteration }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->continent}}</td>
                    <td>
                        

                        <img src="{{ url('images/flag/' .$item->flag_images_path) }}"
                        style="height: 100px; width: 150px;">
                    </td>
                    <<td>{{ date("d/m/Y", strtotime($item->created_at)) }}</td> 
                    <td class="text-center">
                        <a href="{{ route('admin.country.edit',['id'=>$item->cou_id]) }}">Edit |</a>
                        <a href="{{ route('admin.country.destroy',['id'=>$item->cou_id]) }}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection