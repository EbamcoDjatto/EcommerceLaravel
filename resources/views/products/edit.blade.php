@extends('layouts.app')

@section('content')
<div class="container">
   @include('includes.errors')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">

                  <form action="{{ route('products.update',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">

                     {{csrf_field()}}

                     {{method_field('PUT')}}

                     <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" name="name" value="{{$product->name}}" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="number" name="price" class="form-control" value="{{$product->price}}">
                     </div>

                     <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" name="image" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="desc">Description :</label>
                        <textarea name="desc" class="form-control">{{ $product->description}}</textarea>
                     </div>

                     <button class="btn btn-success">Update</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
