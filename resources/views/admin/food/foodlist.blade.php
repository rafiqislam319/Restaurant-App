@extends('admin.master')
@section('body')
<h1 class="text-center">
    List of Foods
</h1>
<style>
    .table {
        table-layout: fixed;
        width: 100%;
    }

    .table td.col-description {
        white-space: pre-wrap;
        /*CSS white-space property to control the text wraps within the cell*/
    }
</style>


<div class="container">
    <div class="row">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th class="col">#</th>
                    <th class="col">Title</th>
                    <th class="col">Price</th>
                    <th class="col">Image</th>
                    <th class="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i=1
                @endphp
                @foreach ($allFood as $food)
                <tr>
                    <td class="col">{{$i++}}</td>
                    <td class="col">{{ $food->title }}</td>
                    <td class="col">{{ $food->price }}</td>
                    <td class="col"><img src="{{ asset('images/' . $food->image) }}" alt="image" height="100px" width="100px">
                    </td>
                    <td class="col col-description" style="height: 100px;">{{ $food->description }}</td>


                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @endsection