@extends('backend.layouts.master')
@section('content')
{{--    {{ dd($settings) }}--}}
    <form method="post" enctype="multipart/form-data" action="{{ route('update.setting') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">System name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="system_name" value="{{ $settings ? $settings->system_name : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control"  name="phone" value="{{ $settings ? $settings->phone : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" class="form-control"  name="mobile" value="{{ $settings ? $settings->mobile : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">address</label>
            <input type="text" class="form-control"  name="address" value="{{ $settings ? $settings->address : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Slogan</label>
            <input type="text" class="form-control"  name="slogan" value="{{ $settings ? $settings->slogan : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">facebook</label>
            <input type="text" class="form-control"  name="facebook" value="{{ $settings ? $settings->facebook : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">youtube</label>
            <input type="text" class="form-control" name="youtube" value="{{ $settings ? $settings->youtube : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">instagram</label>
            <input type="text" class="form-control"  name="instagram" value="{{ $settings ? $settings->instagram : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">copyright</label>
            <input type="text" class="form-control"  name="copyright" value="{{ $settings ? $settings->copyright : "" }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Logo</label>
            <input type="file" class="form-control"  name="logo">
        </div>
@if(isset($settings) && $settings->logo)

            <div class="form-group">
               <img src="{{$settings ? $settings->logo :'' }}" height="100px" width="100px">
            </div>
@endif

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
