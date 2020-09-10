<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Listado de Productos</h1>
        </div>
    </div>
    <br>
    <br>
    <?php if($mensaje != "") { ?> 
        <div class="alert alert-primary alert-dismissible fade show box-mensaje" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <?= $mensaje;?>
        </div>
    <?php } ?>
    <a href="?controller=producto&action=CrearProducto">
        <button class="btn btn-primary">Crear Nuevo</button>
    </a>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre de Producto</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha Creación</th>
                    <th scope="col">Fecha última venta</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($productos) { ?>
                        <?php while ($producto = $productos->fetch_object()) { ?>
                            <tr>
                                <th scope="row"><?= $producto->id ?></th>
                                <td><?= $producto->nombre_producto ?></td>
                                <td><?= $producto->referencia ?></td>
                                <td><?= $producto->precio ?></td>
                                <td><?= $producto->peso ?></td>
                                <td><?= $producto->categoria ?></td>
                                <td><?= $producto->stock ?></td>
                                <td><?= $producto->fecha_creacion ?></td>
                                <td><?= $producto->fecha_ultima_venta ?></td>
                                <td><a href="?controller=producto&action=EditarProducto&id=<?= $producto->id;?>">Editar</a> </td>
                                <td><a href="?controller=producto&action=BorrarProducto&id=<?= $producto->id;?>">Borrar</a> </td>
                            </tr>        
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>