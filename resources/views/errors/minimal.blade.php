<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        @vite(['resources/sass/app.scss'])
    </head>
    <body class="vh-100">
        <div class="d-flex flex-column position-relative justify-content-center" style="min-height: 100%">
            <div class="container py-4">
                <div class="d-flex flex-column align-items-center gap-5 justify-content-center h-100 text-center p-2">
                    <div class="d-flex flex-row gap-2">
                        <span class="fs-5">@yield('code')</span>
                        <span class="fs-5">|</span>
                        <span class="fs-5">@yield('message')</span>
                    </div>
                    <a href="/" class="btn btn-primary btn-sm">На главную</a>
                </div>
            </div>
        </div>
    </body>
</html>
