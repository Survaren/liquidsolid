<div class="page-header navbar navbar-fixed-top">
  <div class="page-header-inner ">
    <div class="page-logo">
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo-default" /> </a>
        <div class="menu-toggler sidebar-toggler"> </div>
      </div>

      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="fa fa-user"></i>
              <span class="username username-hide-on-mobile">{{ Auth::user()->name }}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
              <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-lock"></i> Logout</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
