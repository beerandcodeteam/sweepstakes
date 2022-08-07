<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
<body>

<div class="min-h-screen w-full flex flex-col items-center justify-center bg-gradient-to-tr from-primary-base to-primary-light">
    <img src="{{ asset('logo/logotipo RGB branco.svg') }}"  class="h-10 mb-8" />

    <div class="flex flex-col rounded border border-solid border-white p-4 w-[240px]">
        @yield('content')
    </div>
</div>

</body>
</html>
