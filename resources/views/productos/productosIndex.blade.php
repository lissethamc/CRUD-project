<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Index</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Stock</th>
            <th>Detalle</th>
            <th>Tipo</th>
            <th>Talla</th>
        </tr>
        
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->rutaimg}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->detalle}}</td>
                <td>{{$producto->tipo}}</td>
                <td>{{$producto->talla}}</td>
            </tr>
            @endforeach
        
        
    </table> 
    <!-- <ul>
        @foreach ($productos as $producto)
            <li>{{$producto}}</li>
        @endforeach
    </ul> -->
</body>
</html>