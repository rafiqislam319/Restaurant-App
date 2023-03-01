@extends('admin.master')
@section('body')

<style>
    .form-control:focus {
        background-color: white;
    }
</style>
<h3 class="text-center">Update Foods</h3>
<div class="container">
    <div class="row">
        <form action="{{ route('updateFood', $food->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $food->title }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="{{ $food->price }}">
            </div>
            <div class=" form-group">
                <label for="image">Image</label>
                <img src="{{ asset('images/' . $food->image) }}" alt="image" height="100px" width="100px">
            </div>
            <div>
                <label for="price">Choose new image</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ $food->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection


<!-- below code is needed for maintaining style -->
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
</head>

<body>


</body>

</html>