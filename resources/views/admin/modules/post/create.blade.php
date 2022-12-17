@extends('admin.master')
@section('title', 'Post Create')
@section('module', 'Post')
@section('action', 'Create')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@section('content')
<div class="col-lg-12">
    <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">Title:</label>
                    <input type="text" class="form-control" placeholder="Title" value="{{ old('title') }}" name='title'>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Author:</label>
                    <input type="text" class="form-control" placeholder="Author" value="{{ old('author') }}" name='author'>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Content:</label>             
                    <textarea class="form-control" id="content" placeholder="Enter the content" name="content" value="{{ old('content') }}"></textarea>
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
<script>
    ClassicEditor
    .create( document.querySelector( '#content' ) )
    .catch( error => {
    console.error( error );
    } );
    </script>
@endsection