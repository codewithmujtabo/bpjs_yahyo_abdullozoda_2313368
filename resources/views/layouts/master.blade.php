<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pasien</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-default container px-10">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Pasien</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li class="text-black"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('pasien') }}">List Pasien</a></li>
    </div>
  </div>
</nav>


<main>
    <div class="container">
        @yield('content')
    </div>
</main>


</body>
</html>