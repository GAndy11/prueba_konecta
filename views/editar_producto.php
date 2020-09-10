<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editar Producto</h1>
        </div>
    </div>
    <br>
    <div class="mensaje-box">
        <?= $mensaje;?>
    </div>
    <br>
    <?php if($producto->getNombreProducto()){  ?>
        <div class="row">
            <div class="col-md-12">
                <form action="?controller=producto&action=ActualizarProducto&id=<?= $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <label for="nombre_producto">Nombre de Producto:</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Ingrese el Nombre del producto" value="<?= $producto->getNombreproducto();?>" required>
                    </div>
                    <div class="form-group">
                        <label for="referencia">Referencia:</label>
                        <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Ingrese la Referencia" value="<?= $producto->getReferencia();?>" required>
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el Precio" value="<?= $producto->getPrecio();?>" required>
                    </div>

                    <div class="form-group">
                        <label for="peso">Peso:</label>
                        <input type="text" class="form-control" id="peso" name="peso" placeholder="Ingrese el Peso" value="<?= $producto->getPeso();?>" required>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la Categoría" value="<?= $producto->getCategoria();?>" required>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingrese el Stock disponible" value="<?= $producto->getStock();?>" required>
                    </div>
                    <input id="id" name="id" type="hidden" value="<?= $_GET['id'];?>">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                
            </div>
        </div>
    <?php } ?>
    <br>
    <a href="?controller=producto&action=index">ir Atrás</a>
</div>