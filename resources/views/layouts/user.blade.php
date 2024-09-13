<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create Lead</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        {{-- <div class="menu">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div> --}}
    </header>
    <main>
        @yield('content')
    </main>
    @yield('script')
</body>
</html>