@extends('layouts.app')

@section('content')
<div class="container">

   @include('includes.errors')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Product</div>

                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                     {{csrf_field()}}

                     <div class="form-group">
                        <label for="name">Name :</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="number" name="price" class="form-control" value="{{old('price')}}">
                     </div>

                     <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" name="image" class="form-control">
                     </div>

                     <div class="form-group">
                        <label for="desc">Description :</label>
                        <textarea name="desc" class="form-control">{{old('desc')}}</textarea>
                     </div>

                     <button class="btn btn-primary">Create</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
