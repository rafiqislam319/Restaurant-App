@extends('admin.master')
@section('body')

<style>
    .form-control:focus {
        background-color: white;
    }
</style>
<h3 class="text-center">Add Chefs from here</h3>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Chef') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/storeChef') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="speciality" class="col-md-4 col-form-label text-md-right">{{ __('Speciality') }}</label>

                            <div class="col-md-6">
                                <input id="speciality" type="text" class="form-control" name="speciality" value="{{ old('speciality') }}" required autocomplete="speciality">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- below code is needed for maintaining style -->
<!DOCTYPE html>
<html lang=" en">

<head>
    <base href="/public">
</head>

<body>


</body>

</html>