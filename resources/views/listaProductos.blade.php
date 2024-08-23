<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Lista Productos</h1>

    <thead>
        <tr>
            <th>id</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>stock</th>
            <th>pagaisv</th>
        </tr>
    </thead>
    @foreach ($productos as $producto)
        <tr>
            <td>
                {{ $producto->id }}
            </td>
            <td>
                {{ $producto->descripcion }}
            </td>
            <td>
                {{ $producto->precio }}
            </td>
            <td>
                {{ $producto->stock }}
            </td>
            <td>
                {{ $producto->pagaisv }}
            </td>
        </tr>
    @endforeach
</body>
</html>