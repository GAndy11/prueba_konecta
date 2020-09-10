<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Crear Producto</h1>
        </div>
    </div>
    <br>
    <div class="mensaje-box">
        <?= $mensaje;?>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form action="?controller=producto&action=GuardarProducto" method="POST">
                <div class="form-group">
                    <label for="nombre_producto">Nombre de Producto:</label>
                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Ingrese el Nombre del producto">
                </div>
                <div class="form-group">
                    <label for="referencia">Referencia:</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Ingrese la Referencia">
                </div>

                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el Precio">
                </div>

                <div class="form-group">
                    <label for="peso">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Ingrese el Peso">
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la Categoría">
                </div>

                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingrese el Stock disponible">
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <br>
            <a href="?controller=producto&action=index">ir Atrás</a>
        </div>
    </div>
</div>