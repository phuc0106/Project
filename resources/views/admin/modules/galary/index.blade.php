@extends('admin.master')
@section('title', 'Galary Index')
@section('module', 'Galary')
@section('action', 'Manage')

@push('jscore')
<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><strong>Gallery</strong></h5>
        </div>

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Image</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th><strong>Actions</strong></th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($galary as $item)
                <tr>
                    <td >{{ $loop->iteration }}</td>
                    <td><img src="{{ url('images/bridges/' .$item->path_name) }}" 
                        style="height: 100px; width: 150px;"></td>
                    <td>{{ $item->bridge}}</td>
                    <td>{{ date("d/m/Y", strtotime($item->created_at)) }}</td> 
                    <td>{{ date("d/m/Y", strtotime($item->updated_at)) }}</td>
                    <td class="text-center">
                        
                            <a href="{{route('admin.galary.edit',['id'=>$item->gal_id])}}">Edit</a>|
                      
                            <a href="{{route('admin.galary.destroy',['id'=>$item->gal_id])}}"> delete</a>
                        
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection