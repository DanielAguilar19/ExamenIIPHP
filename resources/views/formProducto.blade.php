<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>

    <form method="POST" action="{{ route('crearProd') }}">
        @csrf
        <input type="text" for="descripcion" name="descripcion" placeholder="descripcion" id="">
        <input type="text" for="precio" name="precio" placeholder="precio" id="">
        <input type="text" for="stock" name="stock" placeholder="stock" id="">
        <input type="text" for="pagaisv" name="pagaisv" placeholder="pagaisv" id="">
    </form>
</body>
</html>