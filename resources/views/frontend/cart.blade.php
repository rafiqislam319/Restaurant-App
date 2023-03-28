@extends('frontend.master')

@section('body')
<h3 class="text-center display-4 pt-4">Shopping Cart</h3>


<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 pt-8">
            <div class="card" style="background-color: #f8f9fa;">
                <div class="card-header">
                    <h5 class="card-title mb-0">Shopping Cart</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartData as $cartData)
                                <tr>
                                    <td>{{ $cartData->title }}</td>
                                    <td>{{ $cartData->price }}</td>
                                    <td>{{ $cartData->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <button class="btn btn-primary btn-sm ml-auto">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- below code is needed for maintaining style for this template -->
<!DOCTYPE html>
<html lang=" en">

<head>
    <base href="/public">
</head>

<body>


</body>

</html>