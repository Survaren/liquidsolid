@extends('layout.skeleton')

@section('body-class', 'page-404-3')

@section('layout-extend')

<div class="page-inner">
	<img src="../img/earth.jpg" class="img-responsive" alt="">
</div>
<div class="container error-404">
	<h1>404</h1>
	<h2>Houston, we have a problem.</h2>
	<p> Actually, the page you are looking for does not exist. </p>
	<p><a href="{{ url('/') }}" class="btn red btn-outline"> Return home </a><br></p>
</div>
@endsection
