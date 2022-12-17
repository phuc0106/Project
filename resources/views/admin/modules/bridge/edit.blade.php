@extends('admin.master')
@section('title', 'Bridge Edit')
@section('module', 'Bridge')
@section('action', 'Edit')

@section('content')
<div class="col-lg-12">
    <form action="{{route('admin.bridge.update')}}" method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" placeholder="Name bridge" value="{{ old('name') }}" name='name'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bridge slug:</label>
                    <input type="text" class="form-control" placeholder="Bridge slug" value="{{ old('bri_slug') }}" name='bri_slug'>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Select Country:</label>
                    <select  id="cou_id" class="form-control" name ="cou_id" value="{{$bri-> old('cou_id') }}">                        
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">height:</label>
                    <input type="text" class="form-control" placeholder="height" name='height' value="{{ $bri->old('height') }}">
                    <label class="form-label">width:</label>
                    <input type="text" class="form-control" placeholder="width" name='width' value="{{ $bri->old('width') }}">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">length:</label>
                    <input type="text" class="form-control" placeholder="length" name='length' value="{{$bri-> old('length') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input type="text" class="form-control" placeholder="Description" name='description' value="{{$bri-> old('description') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Location map:</label>
                    <input type="text" class="form-control" placeholder="Location map" name='location_map'value="{{ $bri->old('location_map') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Open date:</label>
                    <input type="date" class="form-control" placeholder="Open date" name='open_date'value="{{$bri-> old('open_date') }}">
                </div>
                
                <div class="form-group mb-3">
                    <label for="title">Select Type Bridge:</label>
                    <select  id="typ_id" class="form-control" name ="typ_id" value="{{$bri-> old('typ_id') }}">
                        <option value="">Select Type Bridge</option>
                       
                    </select>
                </div>
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>
    </form>
    </div>
</div>
@endsection

