<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>Setup Laravel Bootstrap Succesfully <i class="fas fa-ad"></i></h1>
        <script src="{{ mix('js/app.js') }}"> }}"><"/script>
    </body>
</html> -->

<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.navbar')
    <div class="wrap">
        <div id="main" class="row">
            <div class="col-md-12">
                @include('pages.header')
                @include('pages.experience')
                @include('pages.portofolio')
            </div>
        </div>
    </div>
        @include('includes.footer')
    </body>
</html>