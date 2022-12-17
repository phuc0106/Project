@extends('admin.master')
@section('title', 'Type bridge Index')
@section('module', 'Typebridge')
@section('action', 'Manage')

@push('jscore')
<script src="{{ asset('administrator/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
@endpush

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><strong>Type Bridges</strong></h5>
        </div>

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>                    
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Note</th>
                    <th><strong>Actions</strong></th>
                </tr>
            </thead>
            <tbody> 
                
                @foreach ($typebridge as $item)
                <tr>
                    <td >{{ $loop->iteration }}</td>
                    <td>{{ $item->name}}</td>                    
                    <td>{{ date("d/m/Y", strtotime($item->created_at)) }}</td> 
                    <td>{{ date("d/m/Y", strtotime($item->updated_at)) }}</td>
                    <td></td>
                    <td class="text-center">
                        <a href="{{ route('admin.typebridge.edit',['id'=>$item->typ_id]) }}">Edit |</a>
                        <a href="{{ route('admin.typebridge.destroy',['id'=>$item->typ_id]) }}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection