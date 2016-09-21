<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <title>LiquidSolid</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta id="token" name="token" value="{{csrf_token()}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap2/bootstrap-switch.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @yield('layout-css')
</head>
<body class="@yield('body-class')">
  @yield('layout-extend')

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript" src="{{ asset('js/app.js') }}" /></script>
  <script type="text/javascript" src="{{ asset('js/metronic.js') }}" /></script>
  <script type="text/javascript" src="{{ asset('js/layout.js') }}" /></script>
  <script type="text/javascript" src="{{ asset('js/quick-sidebar.js') }}" /></script>
  @yield('layout-js')
  @if (notify()->ready())
    <script>toastr.{{ notify()->type() }}('{{ notify()->message() }}'
    @if(!empty(notify()->option('heading')))
      , '{{ notify()->option('heading') }}'
    @endif
    );
    </script>
  @endif
</body>
</html>
