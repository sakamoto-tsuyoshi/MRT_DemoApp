<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Y_list</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>
</body>
</html>