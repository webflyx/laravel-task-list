<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('meta_title')</title>
    @yield('styles')
    <style>
        .error-msg{ color: red; font-size:0.8rem; }
        .success{padding: 8px; border: 2px solid green;margin-bottom: 10px;}
    </style>
</head>

<body>
    @if (session()->has('success'))
        <div class="success">{{ session('success') }}</div>
    @endif
    <h1>@yield('title')</h1>
    <div>@yield('content')</div>
</body>

</html>
