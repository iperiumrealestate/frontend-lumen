<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    @yield('head')
</head>
<body>
    <div class="alert alert-warning">
        <p>This is an example site pulling data out of our Express demo website</p>
    </div>
    <div class="container">
        @yield('body')
    </div>
    @yield('script')
</body>
</html>