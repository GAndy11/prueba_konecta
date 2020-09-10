<?php
require_once './models/productoModel.php';

class productoController
{
    public function index()
    {
        $mensaje = "";
        $productos = $this->listarProductos();

        if(!$productos){
            $mensaje = "No hay productos para mostrar";
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
        }

        include_once "./views/listar_productos.php";
    }
    

    public function listarProductos()
    {
        $productos = new productoModel();

        return $productos->getAll();
    }
}
