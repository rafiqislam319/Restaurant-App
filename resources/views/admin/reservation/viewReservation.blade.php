@extends('admin.master')
@section('body')

<style>
    .form-control:focus {
        background-color: white;
    }
</style>
<h3 class="text-center">Reservation List</h3>
<div class="container">
    <div class="row">

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($reservations as $reservation )
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->guest }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->time }}</td>
                    <td>{{ $reservation->message }}</td>
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