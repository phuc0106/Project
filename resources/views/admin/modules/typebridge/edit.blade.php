@extends('admin.master')
@section('title', 'Galary EDIT')
@section('module', 'Galary')
@section('action', 'EDIT')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>Type Bridge edit</strong></h6>
            
        </div>
        <div class="card-body">
            <form action="{{ route('admin.galary.update',['id'=>$typebridge->typ_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
        
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Enter type bridge name">
                </div>
               
                <button  type="submit" class="btn btn-outline-primary col-12"> UPDATE ! </button>
            </form>
        </div>
    </div>
</div>
@endsection