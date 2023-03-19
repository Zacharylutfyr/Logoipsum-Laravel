@extends('layouts.login')

@section('styling')
<link rel="stylesheet" href="{{ url('login-page/css/style.css') }}">
@endsection


@section('title')
    Login Page
@endsection


@section('content')
<section class="login-form">
    <div class="container-fluid">
      <div class="container">
        <div class="login row rounded-4">
          <div class="col-6 left-section ps-5 pt-5">
            <h6 class="pt-4">Hi, There.</h6>
            <h3 class="pt-1">Welcome back to our system</h3>
            <h6 class="pt-4">Username</h6>
            <input
              class="form-control"
              type="text"
              placeholder=""
              aria-label="default input example" />
            <h6 class="pt-4">Password</h6>
            <input
              class="form-control"
              type="text"
              placeholder=""
              aria-label="default input example" />
            <button type="button" class="btn mt-4">Login</button>
          </div>
          <div class="col-6 right-section">
            <img src="login-page/img/background-1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

