@extends('admin.master')
@section('title', 'User Index')  {{-- Ttitle là tên user index alf giá Trị.. @Section = 'con' ảnh hưởng lên yield = 'cha' --}}
@section('module', 'User')
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

        <table class="table datatable-show-all">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                  
                    <th>Image</th>
                   
                    <th><strong>Actions</strong></th>
                </tr>
            </thead>
            <tbody> 
                
                @foreach ($user as $item)
                <tr>
                    <td >{{ $loop->iteration }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                        

                        <img src="{{ url('images/user/' .$item->image) }}"
                        style="height: 100px; width: 150px;">
                    </td>
                    
                    <td class="text-center">
                        <a href="{{ route('admin.user.edit',['id'=>$item->id]) }}">Edit |</a>
                        <a href="{{ route('admin.user.destroy',['id'=>$item->id]) }}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection