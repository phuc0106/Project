@extends('admin.master')
@section('title', 'User Create')
@section('module', 'User')
@section('action', 'Create')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>All User Information</strong></h6>
            
        </div>
 
        <div class="card-body">
            <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="enter user name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="enter user email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Passwords:</label>
                    <input name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="enter user password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Passwords Confirm:</label>
                    <input name="password_confirmation" value="" type="password" class="form-control" placeholder="enter user password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input name="image"  type="file" class="form-control" placeholder="avarta user here">
                </div>
                <button  type="submit" class="btn btn-outline-primary col-12"> CREATE ! </button>
            </form>
        </div>
    </div>
</div>
@endsection