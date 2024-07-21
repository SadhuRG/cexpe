<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilo adicional */
        .navbar-brand img {
            width: 28px;
            height: 28px;
            margin-right: 5px;
        }

        .navbar-nav .nav-link {
            color: #333;
        }

        .navbar-nav .nav-link:hover {
            color: #555;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: red;
            text-decoration: underline;
        }
    </style>

</head>
<body>
    
    @include('partials.nav')
    @include('partials.sesion-estado')

    <!-- Bootstrap JS (opcional, solo si necesitas componentes interactivos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('content')   
</body>
</html>