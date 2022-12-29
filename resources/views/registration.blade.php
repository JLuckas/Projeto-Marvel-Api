@extends('layouts.header')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
        <div class="card-header">Registration</div>
        <div class="card-body">
            <form action="{{route('auth.validate_registration')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="name" class="form-control" />
                    @if ($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="email" class="form-control">
                    @if ($errors->has('email'))
                        <span class="test-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn-dark btn-block">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
