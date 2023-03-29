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
                                    <th>Action</th>
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

                                @foreach ($cart as $cart)
                                <tr style="position: relative; top:-60px; right:-620px">
                                    <td>
                                        <a href="{{ url('/remove/cart', $cart->id) }}" class="btn btn-info">Remove</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <button class="btn btn-primary btn-sm ml-auto" id="orderButton">Order</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" style="display: none;" id="confirmForm">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 pt-8" id="">
            <h1 class="card-header" style="padding: 17px; background-color:#f8f9fa;">Confirm Order from Here</h1>
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>
                <!-- <button type="submit" class="btn btn-primary bg-green">Save</button> -->
                <div class="bg-white">
                    <button class="btn btn-primary btn-sm ml-auto">Confirm</button>
                    <button class="btn btn-danger btn-sm ml-auto" id="orderCancel">Cancel</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection

<!-- below code is needed for maintaining style for this template -->
<!DOCTYPE html>
<html lang=" en">

<head>
    <base href="/public">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>



    <script type="text/javascript">
        $(document).ready(function() {
            $("#orderButton").click(function() {
                $("#confirmForm").show();
            });
            $("#orderCancel").click(function() {
                $("#confirmForm").hide();
            });
        });
    </script>

</body>

</html>