@extends('admin.master')
@section('body')

<style>
    .form-control:focus {
        background-color: white;
    }
</style>
<h3 class="text-center">Order List</h3>
<form action="{{ url('/search') }}" method="get">
    @csrf
    <input type="text" name="search" style="color:blue;">
    <input type="submit" value="Search" class="btn btn-success">
</form>
<div class="container">


    <div class="row" style="padding: 20px;">


        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderDetails as $orderDetails )
                <tr>

                    <td>{{ $orderDetails->customer_name }}</td>
                    <td>{{ $orderDetails->phone }}</td>
                    <td>{{ $orderDetails->address }}</td>
                    <td>{{ $orderDetails->title }}</td>
                    <td>{{ $orderDetails->price }}</td>
                    <td>{{ $orderDetails->quantity }}</td>
                    <td>{{ $orderDetails->quantity * $orderDetails->price }}</td>
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