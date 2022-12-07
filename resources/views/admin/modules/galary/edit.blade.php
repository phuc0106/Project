@extends('admin.master')
@section('title', 'Galary EDIT')
@section('module', 'Galary')
@section('action', 'EDIT')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>User Information</strong></h6>
            
        </div>

        <div class="card-body">
            <form action="{{ route('admin.galary.update',['id'=>$galary->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label class="form-label"> Change Image:</label>
                    <input name="image"  type="file" class="form-control" placeholder="avarta user here">
                </div>
                <button  type="submit" id="password" class="btn btn-outline-primary col-12"> UPDATE ! </button>
            </form>
        </div>
    </div>
</div>
@endsection