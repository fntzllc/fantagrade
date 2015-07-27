<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fantagrade - @yield('title')</title>
    <link rel="stylesheet" href="/assets/bootstrap.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="/assets/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="/assets/fantagrade.css" type="text/css" media="all" />
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="/images/logo.svg" width="200"/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login">Login</a></li>
            <li class="active"><a href="/auth/register">Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="/assets/bootstrap.min.js"></script>
</body>
</html>