<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @component('components.helpers.headers')@endcomponent
    </head>
    <body>
        <div id="app">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="animate__animated animate__pulse animate__infinite infinite">Feegow-challenger</h1>
                </div>
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
