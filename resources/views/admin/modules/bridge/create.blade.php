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
                    <input type="text" class="form-control" placeholder="Name bridge" value="{{ old('name') }}" name='name'>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bridge slug:</label>
                    <input type="text" class="form-control" placeholder="Bridge slug" value="{{ old('bri_slug') }}" name='bri_slug'>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Select Country:</label>
                    <select  id="cou_id" class="form-control" name ="cou_id">                        
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">height:</label>
                    <input type="text" class="form-control" placeholder="height" name='height' value="{{ old('height') }}">
                    <label class="form-label">width:</label>
                    <input type="text" class="form-control" placeholder="width" name='width' value="{{ old('width') }}">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">length:</label>
                    <input type="text" class="form-control" placeholder="length" name='length' value="{{ old('length') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input type="text" class="form-control" placeholder="Description" name='description' value="{{ old('description') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Location map:</label>
                    <input type="text" class="form-control" placeholder="Location map" name='location_map'value="{{ old('location_map') }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Open date:</label>
                    <input type="date" class="form-control" placeholder="Open date" name='open_date'value="{{ old('open_date') }}">
                </div>
                
                <div class="form-group mb-3">
                    <label for="title">Select Type Bridge:</label>
                    <select  id="typ_id" class="form-control" name ="typ_id">
                        <option value="">Select Type Bridge</option>
                       
                    </select>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
    //select cou_id    
    Load_country();
    Load_typebridge();
    function Load_country()
    {
        $.ajax({
                url: "{{url('admin/bridge/getCountry')}}",
                type: "GET",
                dataType: "json",
                success:function(data) {                      
                    $('select[name="cou_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="cou_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
    }

    function  Load_typebridge()
    {
        $.ajax({
                url: "{{url('admin/bridge/gettype')}}",
                type: "GET",
                dataType: "json",
                success:function(data) {                      
                    $('select[name="typ_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="typ_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
    }
    // $('select[name="cou_id"]').on('click', function() {
            
            
    // });
        
    // $('select[name="cou_id"]').on('change', function() {
            
    //         $.ajax({
    //             url: "{{url('admin/bridge/getCountry')}}",
    //             type: "GET",
    //             dataType: "json",
    //             success:function(data) {                      
    //                 $('select[name="cou_id"]').empty();
    //                 $.each(data, function(key, value) {
    //                     $('select[name="cou_id"]').append('<option value="'+ key +'">'+ value +'</option>');
    //                 });
    //             }
    //         });
       
    // });
       
     //select typ_id   
    //  $('select[name="typ_id"]').on('change', function() {
            
    //     $.ajax({
    //             url: "{{url('admin/bridge/gettype')}}",
    //             type: "GET",
    //             dataType: "json",
    //             success:function(data) {                      
    //                 $('select[name="typ_id"]').empty();
    //                 $.each(data, function(key, value) {
    //                     $('select[name="typ_id"]').append('<option value="'+ key +'">'+ value +'</option>');
    //                 });
    //             }
    //         });
    //  });
     $('select[name="typ_id"]').on('click', function() {
            
        
     });
});
            

         
    

   
      
        

</script>