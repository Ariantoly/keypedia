<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        @if (Str::is('category/*', Request::path()) || Str::is('keyboard/*', Request::path()))
            <link rel="stylesheet" href="../css/style.css">  
        @else
            <link rel="stylesheet" href="css/style.css">
        @endif
        <title>@yield('title')</title>
    </head>
    
    <body class="bg-info">
        @include('components.navbar_guest')
        @include('components.navbar_customer')
        @include('components.navbar_manager')

        <div class="container py-5 px-5">
            @yield('content')
        </div>

        <footer class="bg-light bg-gradient d-flex justify-content-center align-items-center py-2">
            <p>Made by Keypedia CEO-ES - 2021</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>