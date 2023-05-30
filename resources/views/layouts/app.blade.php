<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')

    <main class="bg-secondary ">
        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>

<style>
    main{
        max-width: 1000px;
        margin: 0 auto;
        height: 800px;
        padding: 1rem
    }

</style>