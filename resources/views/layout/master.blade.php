<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>
    @include('custom.boostrapJS')
</head>
<body>
    <div class="container-fluid">
        @include('layout.navbar')
        @yield('pagecontent')
    </div>
</body>
</html>