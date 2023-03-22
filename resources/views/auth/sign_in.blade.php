@extends('master')
@section('title','Sign in')
@section('content')
    <h2 class="text-center">Sign in</h2>

    @if($message = Session::get('success'))

        <div style="max-width: 500px" class="container alert alert-success">
            {{ $message }}
        </div>

    @endif

    @if ($errors->any())
        <div style="max-width: 500px" class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form  method="POST" action="{{route('handleSignIn')}}" style="max-width: 500px" class="mx-auto mt-5">
        @csrf
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="Email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input  name="forgetPassword" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <label class="mb-3 d-block">I don't have an account  <a  href="{{route('signUp')}}">Sign up</a></label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
