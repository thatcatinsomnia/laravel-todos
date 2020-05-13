<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    crossorigin="anonymous">

</head>

<body>
  @include('partials.navigation')

  <div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @endif

    @yield('content')
  </div>
</body>

</html>