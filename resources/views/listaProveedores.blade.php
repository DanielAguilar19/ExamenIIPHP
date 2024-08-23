<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>proveedores</title>
</head>
<body>
    <h1>Lista proveedores</h1>
    <a href="/form/prov">Crear Nuevo Prooveedor</a>
    <thead>
        <tr>
            <th>id proveedor</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>fecha registro</th>
            <th>correo</th>
        </tr>
    </thead>
    @foreach ($proveedores as $proveedor)
        <tr>
            <td>
                {{ $proveedor->id_proveedor }}
            </td>
            <td>
                {{ $proveedor->nombre }}
            </td>
            <td>
                {{ $proveedor->telefono }}
            </td>
            <td>
                {{ $proveedor->fecha_registro }}
            </td>
            <td>
                {{ $proveedor->correo }}
            </td>
        </tr>
    @endforeach
</body>
</html>