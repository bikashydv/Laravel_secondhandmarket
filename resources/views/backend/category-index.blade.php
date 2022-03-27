@extends('backend.layouts.master')
@section('content')

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <center><h2> Categories Details</h2></center>
                                    </h6>
                                </div>
           .                     <br>
                                <a href="{{ route('category.create.view') }}"  style="position: absolute; right: 0;" class="btn btn-dark">+Add New Item</a>
                                <br>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">icon</th>
                                                <th scope="col">status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($categories as $category)
                                            <tr>
                                                <th> {{ $loop->iteration ??  null }} </th>
                                                <td> {{ $category -> name ??  null }} </td>
                                                <td> {{ $category -> description ??  null }} </td>
                                                <td>  <i class="{{ $category->icon ?? '' }}"></i> </td>
{{--                                                <td>  <img src="{{$category->image}}" height="50px"> </td>--}}
                                                <td> {{ $category -> status=='1' ? 'Active' : 'Inactive'}} </td>
                                                <td>
                                                <a href=" {{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('category.delete', $category->id) }}" class="btn btn-primary">Delete</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr > <td colspan="8"> Nothing Found!</td></tr>
                                            @endforelse
                                            </tbody>
                                        </table>

@endsection
