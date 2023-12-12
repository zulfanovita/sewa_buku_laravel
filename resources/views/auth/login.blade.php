@extends('layout.login')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2-form-label">Email</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email" autofocus required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        </form>
    </div>
@endsection