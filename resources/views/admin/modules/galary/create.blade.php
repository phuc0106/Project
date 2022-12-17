@extends('admin.master')
@section('title', 'Galary Create')
@section('module', 'Galary')
@section('action', 'Create')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>All User Information</strong></h6>
            
        </div>

        <div class="card-body">
            <form action="{{ route('admin.galary.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Choose a bridge:</label>
                    <select  id="country-dropdown" class="form-control" name="bri_id">
                        @if ($bri->count())

                            @foreach($bri as $item)
                            {{-- <option value="{{ $item->bri_id }}" {{ $selected_bri == $item->bri_id ? 'selected="selected"' : '' }}>{{ $item->name }}</option> --}}
                            <option value="{{$item->bri_id}}">{{$item->name}}</option>
                            @endforeach    
                
                        @endif
                       
                    </select>

                </div>

                
                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input name="path_name"  type="file" class="form-control" placeholder="Gallery Image">
                </div>

                <button  type="submit" class="btn btn-outline-primary col-12"> UPLOAD </button>
            </form>
        </div>
    </div>
</div>
@endsection