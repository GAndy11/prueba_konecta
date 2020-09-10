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
    <a href="?controller=personas&action=CrearPersona">
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>