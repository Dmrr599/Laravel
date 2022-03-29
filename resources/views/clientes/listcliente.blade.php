<h1>Listar Cliente</h1>
<table class="tabla table-light">
    <tbody>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de Registro</th>
                <th>Estatus</th>
                <th>Eliminar | Editar</th>
                
            </tr>
        </thead>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->idcliente}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apaterno}}</td>
                <td>{{$cliente->amaterno}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->fechareg}}</td>
                <td>{{$cliente->estatus}}</td>
                <td>
                    <form action="" method="POST">
                        <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" onclick="return confirm('Editar Registro?')" value="Editar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>