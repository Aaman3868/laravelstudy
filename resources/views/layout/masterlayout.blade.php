<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aamn Crud - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/post">Home</a></li>
      <li><a href="/hello/login">login Page</a></li>
<li><a href="/hello/about">About Page</a></li>
<li><a href="/hello/career">Career Page</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>@yield('content')</p>
</div>

</body>
</html>
