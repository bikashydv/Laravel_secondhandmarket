@extends('backend.layouts.master')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{--            {{ dd($product) }}--}}
    <form method="post" enctype="multipart/form-data" action="{{route('product.update', $product->id)}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="{{$product ? $product->name : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" class="form-control"  name="price" value="{{$product ? $product->price : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" class="form-control"  name="price" value="{{$product ? $product->price : ''}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

