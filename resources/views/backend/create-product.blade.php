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
            <input type="text" class="form-control" aria-describedby="emailHelp" name="name" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" name="description" value="">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="text" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

