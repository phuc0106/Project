@extends('admin.master')
@section('title', 'Type bridge Create')
@section('module', 'TypeBridge')
@section('action', 'Create')

@section('content')
<div class="card-body">
    <form action="{{ route('admin.typebridge.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="enter type bridge">
        </div>
       
        <button  type="submit" class="btn btn-outline-primary col-12"> SUBMIT ! </button>
    </form>
</div>

@endsection