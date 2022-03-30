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
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category" id="category">
                <option value="">--Select--</option>
                @forelse($categories as $category)
                    <option
                        value="{{ $category ? $category->id :'' }}" {{ ($category &&  $category->id ==$product->category_id) ? 'selected' :'' }}> {{ $category ? $category->name :'' }} </option>
                @empty
                    <option>--NO Categoris</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name"
                   value="{{$product ? $product->name : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" class="form-control" name="price" value="{{$product ? $product->price : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input type="text" class="form-control" name="author" value="{{$product ? $product->author : ''}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Publish on</label>
            <input type="text" class="form-control" name="publish_on" value="{{$product ? $product->publish_on : ''}}">
        </div>
        <div>
            <label for="formFileLg" class="form-label">product image</label>
            <img src="{{ $product? $product->image: ''}}" height="100px" width="100px" >

        </div>
        <div>
            <label for="formFileLg" class="form-label"></label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
        </div>




        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

