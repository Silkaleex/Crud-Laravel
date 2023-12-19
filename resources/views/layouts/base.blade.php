<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Lista de Tareas</title>
</head>
<body style="background-image:url(https://images.pexels.com/photos/1509534/pexels-photo-1509534.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);background-size:cover;">
    <div class="container">
        @yield('content')
        <!--Se utiliza para marcar un area en un layout donde se puede insertar contenido especifico de cada vista.
            Actua como un marcador de posicion que permite a las vistas que utilizan ese layout inyectar contenido en la posición designada.
        -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<!-- 
    Layout: plantilla base que define la estructura y diseño común de varias páginas en una aplicación web.
    Permite reutilizar elementos de diseño y codigo encabezados como menus, pies de pagina, en multiples vistas sin tener que repetir
    el mismo codigo en cada una.
-->