<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <title>My custom theme</title>

        {{--
        <link href="{{ asset('assets/styles/example.css') }}" rel="stylesheet">
        --}}
    </head>
    <body>
        This is the Layout base file which must include the content yield. All other components will be included ahead.
        @yield('content')

        {{--
        <script src="{{ asset('assets/scripts/example.js') }}"></script>
        --}}
    </body>

</html>
