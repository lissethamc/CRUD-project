<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Create</title>
</head>
<body>
    <h1>Nuevo producto</h1>
    <form action="/productos" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="nombre">Nombre producto:</label>
        <input type="text" name="nombre">
        <br>
        <label for="rutaimg">Ruta:</label>
        <input type="text" name="rutaimg">
        <br>
        <label for="stock">Stock:</label>
        <input type="number" name="stock">
        <br>
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle">
        <br>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo">
        <br>
        <label for="talla">Talla:</label>
        <select id="talla" name="talla">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="m" selected>M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form> 
    
</body>
</html>