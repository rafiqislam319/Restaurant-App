@extends('admin.master')
@section('body')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if ($user->user_type=='0')
                    <td><a href="{{ url('deleteUser', $user->id) }}">Delete</a></td>
                    @else
                    <td><a>Not Allowed</a></td>
                    @endif
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection