<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Crear Empleado</h1>

    <form method="POST" action="{{ route('crearEmp') }}">
        @csrf
        <input type="text" for="nombre" name="nombre" placeholder="nombre" id="">
        <input type="text" for="apellido" name="apellido" placeholder="apellido" id="">
        <input type="text" for="fecha_ingreso" name="fecha_ingreso" placeholder="fecha_ingreso YYY-MM-DD" id="">
        <input type="text" for="salario" name="salario" placeholder="salario" id="">

        <button type="submit">enviar</button>
    </form>
</body>
</html>