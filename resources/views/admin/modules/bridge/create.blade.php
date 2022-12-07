@extends('admin.master')
@section('title', 'Bridge Create')
@section('module', 'Bridge')
@section('action', 'Create')

@section('content')
<div class="col-lg-12">
    <form action="{{route('admin.bridge.store')}}" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0">Bridge</h6>
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
                    <input type="text" class="form-control" placeholder="Name bridge" name='name'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bridge slug:</label>
                    <input type="text" class="form-control" placeholder="Bridge slug" name='bri_slug'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Country:</label>
                    <input type="text" class="form-control" placeholder="Country" name='cou_id'>
                </div>
                <div class="mb-3">
                    <label class="form-label">height:</label>
                    <input type="number" class="form-control" placeholder="height" name='height'>
                    <label class="form-label">width:</label>
                    <input type="number" class="form-control" placeholder="width" name='width'>
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">length:</label>
                    <input type="number" class="form-control" placeholder="length" name='length'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input type="text" class="form-control" placeholder="Description" name='description'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Location map:</label>
                    <input type="text" class="form-control" placeholder="Location map" name='location_map'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Open date:</label>
                    <input type="date" class="form-control" placeholder="Open date" name='open_date'>
                </div>
                
               
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
    </div>
</div>
@endsection