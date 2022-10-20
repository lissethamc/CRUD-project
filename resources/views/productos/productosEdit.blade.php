<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="/productos/{{$producto->id}}" method="post">
        @csrf
        @method("patch")
        <!-- name debe ser igual al de la tabla de bd -->

        <label for="nombre">Nombre producto:</label>
        <input type="text" name="nombre" value = "{{$producto->nombre}}">
        <br>
        <label for="rutaimg">Ruta:</label>
        <input type="text" name="rutaimg" value = "{{$producto->rutaimg}}">
        <br>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" value = "{{$producto->stock}}">
        <br>
        <label for="detalle">Detalle:</label>
        <input type="text" name="detalle" value = "{{$producto->detalle}}">
        <br>
        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" value = "{{$producto->tipo}}">
        <br>
        <label for="talla">Talla:</label>
        <select id="talla" name="talla">
            <option value="XS" {{$producto->talla=="XS"?'selected':''}}>XS</option>
            <option value="S" {{$producto->talla=="S"?'selected':''}}>S</option>
            <option value="M" {{$producto->talla=="M"?'selected':''}}>M</option>
            <option value="L" {{$producto->talla=="L"?'selected':''}}>L</option>
            <option value="XL" {{$producto->talla=="XL"?'selected':''}}>XL</option>
        </select>
        <br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>