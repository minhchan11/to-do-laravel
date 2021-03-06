<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>To Do List</title>
  </head>
  <body>
    <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
            @include('common.errors')
            @include('common.message')
            @yield('content')
    </div>
    </body>
  </body>
</html>
