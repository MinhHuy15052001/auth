@extends('master')

@section('content')
    <h2 class="text-center">Sign up</h2>
    @if ($errors->any())
        <div style="max-width: 500px" class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('handleSignUp')}}" method="POST" style="max-width: 500px" class="mx-auto mt-5">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="Name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="Email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
        </div>

        <label class="mb-3 d-block">I have an account  <a  href="{{route('signIn')}}">Sign in</a></label>
        <button type="submit" class=" btn btn-primary">Submit</button>
    </form>
@endsection
