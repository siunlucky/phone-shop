<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Gadget</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="flex flex-col justify-between h-full">
        @include('.partials.navbar')
        <div class="container h-full bg-white pb-7">
            @yield('pages')
        </div>
        @include('.partials.footer')
    </div>
</body>

</html>