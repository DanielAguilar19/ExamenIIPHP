<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>
    <h1>Crear Proveedor</h1>

    <form method="POST" action="{{ route('crearProve') }}">
        @csrf
        <input type="text" for="nombre" name="nombre" placeholder="nombre" id="">
        <input type="text" for="fecha_registro" name="fecha_registro" placeholder="fecha_registro" id="">
        <input type="text" for="telefono" name="telefono" placeholder="telefono" id="">
        <input type="text" for="correo" name="correo" placeholder="correo" id="">
    </form>
</body>
</html>