@extends('layout.default')

@section('main-content')
  <h3 class="page-title"> Dashboard
    <small>dashboard &amp; statistics</small>
  </h3>
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="dashboard-stat blue">
        <div class="visual">
          <i class="fa fa-users"></i>
        </div>
        <div class="details">
          <div class="number">
            <span data-counter="counterup" data-value="{{$data['user_count']}}">{{$data['user_count']}}</span>
          </div>
          <div class="desc"> users </div>
        </div>
        <a class="more" href="#"> View<i class="m-icon-swapright m-icon-white"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="dashboard-stat red">
        <div class="visual">
          <i class="fa fa-users"></i>
        </div>
        <div class="details">
          <div class="number">
            <span data-counter="counterup" data-value="{{$data['user_count']}}">{{ round($data['user_count'] / 3) }}</span>
          </div>
          <div class="desc"> breeders </div>
        </div>
        <a class="more" href="#"> View<i class="m-icon-swapright m-icon-white"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="dashboard-stat purple">
        <div class="visual">
          <i class="fa fa-users"></i>
        </div>
        <div class="details">
          <div class="number">
            <span data-counter="counterup" data-value="{{$data['user_count']}}">{{$data['user_count'] * 3}}</span>
          </div>
          <div class="desc"> dogs </div>
        </div>
        <a class="more" href="#"> View<i class="m-icon-swapright m-icon-white"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="dashboard-stat green">
        <div class="visual">
          <i class="fa fa-users"></i>
        </div>
        <div class="details">
          <div class="number">
            <span data-counter="counterup" data-value="404">404</span>
          </div>
          <div class="desc"> sales </div>
        </div>
        <a class="more" href="#"> View<i class="m-icon-swapright m-icon-white"></i></a>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
@endsection
