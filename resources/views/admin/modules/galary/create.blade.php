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
                    <select  id="country-dropdown" class="form-control">
                        <option value="">-- Select Bridge --</option>
                        {{-- @foreach ($countries as $data)
                        <option value="{{$data->id}}">
                            {{$data->name}}
                        </option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Image:</label>
                    <input name="image"  type="file" class="form-control" placeholder="Gallery Image">
                </div>

                <button  type="submit" class="btn btn-outline-primary col-12"> UPLOAD </button>
            </form>
        </div>
    </div>
</div>
@endsection