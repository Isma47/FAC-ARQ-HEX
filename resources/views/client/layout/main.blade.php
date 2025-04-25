<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="w-screen h-screen overflow-hidden bg-[#F9F9F9]">
   

<div class="flex gap-6">
    @include('client.layout.header')

    <div class="w-10/12 h-screen">
        @yield('content')
    </div>
</div>

</body>
</html>