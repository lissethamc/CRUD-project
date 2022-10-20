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
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td><a href="/productos/{{$producto->id}}">{{$producto->nombre}}</a></td>
                <td>{{$producto->rutaimg}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->detalle}}</td>
                <td>{{$producto->tipo}}</td>
                <td>{{$producto->talla}}</td>
                <td><a href="/productos/{{$producto->id}}/edit">Editar</a></td>
                <td>
                    <form action="/productos/{{$producto->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Eliminar">
                    </form> 
                </td>
            </tr>
            @endforeach
            <!-- las rutas se obtienen de la route list, para eso se tiene que se agregar en el archivo web la ruta a productos para que se muestre en las rutas,  -->
        
    </table> 
    <a href="/crear-producto">Crea producto</a>
    <!-- <ul>
        @foreach ($productos as $producto)
            <li>{{$producto}}</li>
        @endforeach
    </ul> -->
</body>
</html>