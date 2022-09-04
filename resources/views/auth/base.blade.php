<!doctype html>
<html class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
<body class="h-full">

<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img src="{{ asset('logo/logotipo RGB.svg') }}"  class="mx-auto h-12 w-auto" />
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            @yield("content")
        </div>
    </div>
</div>


</body>
</html>
