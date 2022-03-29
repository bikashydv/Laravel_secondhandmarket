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
    {{--        {{ dd($settings) }}--}}
    <form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" name="category" id="category">
                <option value="">--Select--</option>
                @forelse($categories as $category)
                    <option value="{{ $category ? $category->id :'' }}"> {{ $category ? $category->name :'' }} </option>
                @empty
                    <option>--NO Categoris</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="text" class="form-control" name="price" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">publish on</label>
            <input type="date" class="form-control" name="publish_on" value="">
        </div>

        <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

