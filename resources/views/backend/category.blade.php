@extends('backend.layouts.master')
@section('content')
{{--        {{ dd($settings) }}--}}
          <form method="post" enctype="multipart/form-data" action="{{ route('category.create') }}">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="{{ $settings ? $settings->name : "" }}">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control"  name="description" value="{{ $settings ? $settings->description : "" }}">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">status</label>
    <input type="text" class="form-control"  name="status" value="{{ $settings ? $settings->status : "" }}">
</div>

<div class="form-group">
    <label for="exampleInputPassword1">icon</label>
    <input type="file" class="form-control"  name="icon">
</div>
@if(isset($settings) && $settings->icon)

    <div class="form-group">
        <img src="{{$settings ? $settings->icon :'' }}" height="100px" width="100px">
    </div>
@endif

<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

