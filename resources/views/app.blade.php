<!DOCTYPE html>
<html>
    <head>
        <title>Laravel-test: @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel-test</div>
                @yield('content')

                @yield('footer')
            </div>
        </div>
    </body>
</html>
