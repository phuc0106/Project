@extends('admin.master')
@section('title', 'User EDIT')
@section('module', 'User')
@section('action', 'EDIT')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>User Information</strong></h6>
            
        </div>

        <div class="card-body"> 
            <form action="{{ route('admin.user.update',['id'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Change user name ?</label>
                    <input name="name" value="{{ old('name', $user->name) }}" type="text" class="form-control" placeholder="enter user name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input name="email" value="{{ old('email', $user->email) }}" type="email" class="form-control" placeholder="enter user email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Change user passwords ?</label>
                    <input name="password" type="password" class="form-control" placeholder="enter user password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Passwords Confirm:</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="enter user password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input name="image"  type="file" class="form-control" placeholder="avarta user here">
                </div>
                <button  type="submit" id="password" class="btn btn-outline-primary col-12"> UPDATE ! </button>
            </form>
        </div>
    </div>
</div>
@endsection