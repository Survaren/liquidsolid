@extends('layout.skeleton')

@section('body-class', 'login')

@section('layout-extend')
  <div class="logo">
    <a href="{{ url('/') }}"><img src="{{ asset('img/logo-big.png') }}" alt=""> </a>
  </div>
  <div class="content">
    <form class="login-form" action="{{ action('Auth\LoginController@login') }}" method="post">
      {!! csrf_field() !!}
      <h3 class="form-title font-green">Sign In</h3>
      <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="E-Mail Address" name="email" value="john@example.com">
      </div>
      <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="secret">
      </div>
      <div class="form-actions">
        <button type="submit" class="btn green uppercase">Login</button>
        <label class="rememberme check"><input type="checkbox" name="remember">Remember</label>
      </div>
      @include('errors.list')
      <div class="create-account">
        <p><a href="#" class="uppercase">Created by liquidSolid</a></p>
      </div>
    </form>
  </div>
@endsection
