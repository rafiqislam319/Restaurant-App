@extends('admin.master')
@section('body')

<style>
    .form-control:focus {
        background-color: white;
    }
</style>
<h3 class="text-center">Chefs List</h3>
<div class="container">
    <div class="row">

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp

                @foreach ($chefs as $chef )
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $chef->name }}</td>
                    <td>{{ $chef->speciality }}</td>
                    <td><img src="/images/{{ $chef->image }}" alt="" style="height: 120px; width: 150px;"></td>
                    <td>
                        <a href="{{ url('update/chef', $chef->id) }}" class="btn btn-success btn-xs">Update</a>
                        <a href="{{ url('delete/chef', $chef->id) }}" class="btn btn-danger btn-xs">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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