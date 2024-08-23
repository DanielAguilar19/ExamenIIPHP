<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>
<body>
    <h1>Lista empleados</h1>

    <thead>
        <tr>
            <th>id prestamo</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>fecha ingreso</th>
            <th>salario</th>
        </tr>
    </thead>
    @foreach ($empleados as $empleado)
        <tr>
            <td>
                {{ $empleado->id_prestamo }}
            </td>
            <td>
                {{ $empleado->nombre }}
            </td>
            <td>
                {{ $empleado->apellido }}
            </td>
            <td>
                {{ $empleado->fecha_ingreso }}
            </td>
            <td>
                {{ $empleado->salario }}
            </td>
        </tr>
    @endforeach
</body>
</html>