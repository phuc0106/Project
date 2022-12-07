@extends('admin.master')
@section('title', 'Country Create')
@section('module', 'Country')
@section('action', 'Create')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0">Bounce</h6>
            <div class="ms-auto">
                <a href="#" class="text-body animation" data-animation="bounce">
                    <i class="ph-play-circle"></i>
                </a>
            </div>
        </div>

        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" placeholder="Eugene Kopyov">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection