@extends('layout.skeleton')

@section('body-class', 'page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white')

  @section('layout-extend')

    @include('layout._partials.topbar')
    <div class="clearfix"> </div>

    <div class="page-container">
      @include('layout._partials.navigation')
      <div class="page-content-wrapper">
        <div class="page-content">
          @yield('main-content')
        </div>
      </div>
    </div>

  @endsection
  
