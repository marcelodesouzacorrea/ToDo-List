<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>ToDo List</title>
</head>
<body>
    @include('inc.nav')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        Copyright &copy; 2019 ToDoList
    </footer>
</body>
</html>