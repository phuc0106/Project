@extends('admin.master')
@section('title', 'Continent Create')
@section('module', 'Continent')
@section('action', 'Continent')

@section('content')

<div class="col-lg-12">
    <form action="{{route('admin.continent.store')}}" method="POST" enctype="multipart/form-data">
       
        <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0">Continent Create</h6>
            <div class="ms-auto">
                <a href="#" class="text-body animation" data-animation="bounce">
                    <i class="ph-play-circle"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            @csrf
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Continent" name='name'>
                </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>
</div>
@endsection