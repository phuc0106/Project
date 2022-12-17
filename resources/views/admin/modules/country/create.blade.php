@extends('admin.master')
@section('title', 'Country Create')
@section('module', 'Country')
@section('action', 'Create')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex  align-items-center">
            <h6 class="mb-0"><strong>Create country</strong></h6>
            
        </div>
 
        <div class="card-body">
            <form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="enter name country">
                </div>
                <label class="form-label">ntinents:</label>
                <select class="form-control m-bot15" name="con_id" value="{{ old('con_id') }}" id="con_id">
                    {{-- @if($cont->count() > 0) --}}
                  
                   <option value="">--Select Continents--</option>
                   @foreach($cont as $item)
                   <option value="{{$item->con_id}}">{{$item->name}}</option>
                   @endForeach
                   {{-- @else
                    No Record Found
                     @endif    --}}
                 </select>


                <div class="mb-3">
                    <label class="form-label">Flag:</label>
                    <input name="flag_images_path"  type="file" class="form-control" placeholder="Flag image">
                </div>
                <button  type="submit" class="btn btn-outline-primary col-12"> CREATE ! </button>
            </form>
        </div>
    </div>
</div>
@endsection
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('select[name="con_id"]').on('change', function() {
            
                $.ajax({
                    url: "{{url('admin/country/getContinent')}}",
                    type: "GET",
                    dataType: "json",
                    success:function(data) {                      
                        $('select[name="con_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="con_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
           
        });
    }); --}}

        
    
</script>