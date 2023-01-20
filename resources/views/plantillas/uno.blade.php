<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Tailwind css-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Sweetalert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('titulo')</title>
</head>

<body style="background-color: #e0f527">
    <h1 class="my-2 text-center text-lg">@yield('cabecera')</h1>
    <div class="container mx-auto">
        @yield('contenido')
    </div>
    @yield('js')
</body>

</html>