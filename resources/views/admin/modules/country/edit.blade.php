@extends('admin.master')
@section('title', 'Country Edit')
@section('module', 'Country')
@section('action', 'Edit')

@section('content')
<div class="card-body"> 
    <form action="{{ route('admin.user.update',['id'=>$country->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Change country name ?</label>
            <input name="name" value="{{ old('name', $user->name) }}" type="text" class="form-control" placeholder="enter user name">
        </div>
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
        <button  type="submit" id="password" class="btn btn-outline-primary col-12"> UPDATE ! </button>
    </form>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#con_id').on('change', function () {
            var str='';
           
         
            str='xin chào';
            $("#con_id").html('');
            $.ajax({
                url: "{{url('admin/country/getContinent')}}",
                type: "GET",
                
                dataType: 'json',
                success:function(data) {                      
                        $('select[name="con_id"]').empty();
                        $.each(data, function(key, value) {
                        $('select[name="con_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="con_id"]').empty();
            }
        
    });
</script>