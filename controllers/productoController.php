<?php
require_once './models/productoModel.php';

class productoController
{
    public function index($men = "")
    {
        $mensaje = $men;
        $productos = $this->listarProductos();

        if(!$productos){
            $mensaje = "No hay productos para mostrar";
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
        }

        echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
        include_once "./views/listar_productos.php";
        
    }
    

    public function listarProductos()
    {
        $productos = new productoModel;

        return $productos->getAll();
    }

    public function CrearProducto()
    {
        $mensaje = "";

        include_once "./views/crear_producto.php";
    }

    public function GuardarProducto()
    {
        $mensaje = "";

        $camposObligatorios = [
            "Nombre de Producto" => $_POST["nombre_producto"],
            "Referencia" => $_POST["referencia"],
            "Precio" => $_POST["precio"],
            "Peso" => $_POST["peso"],
            "Categoría" => $_POST["categoria"],
            "Stock" => $_POST["stock"]
        ];

        foreach ($camposObligatorios as $key => $value) 
        {
            if ($value == "") 
            {
                $mensaje .= "El campo:  $key no puede quedar vacío <br>";
            }
        }

        if($mensaje != ""){
            include_once './views/crear_producto.php';
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
            die();
        }

        $fecha = date("Y/m/d");

        //Crear el producto
        $producto = new productoModel;
        $producto->setNombreProducto(trim($_POST["nombre_producto"]));
        $producto->setReferencia(trim($_POST["referencia"]));
        $producto->setPrecio(trim($_POST["precio"]));
        $producto->setPeso(trim($_POST["peso"]));
        $producto->setCategoria(trim($_POST["categoria"]));
        $producto->setStock(trim($_POST["stock"]));
        $producto->setFechaCreacion($fecha);

        $respuesta = $producto->GuardarProducto();

        if ($respuesta == true) {
            $mensaje = "Registro guardado con éxito";
        }else{
            $mensaje = $respuesta;
        }

        $this->index($mensaje);

    }

    public function EditarProducto()
    {
        $mensaje = "";

        $producto = new productoModel();
        if(!$producto->ConsultarProducto($_GET['id'])){
            $mensaje = "Producto no existe en la BD";
        }        

        include_once "./views/editar_producto.php";
    }

    public function ActualizarProducto()
    {
        $mensaje = "";

        $camposObligatorios = [
            "Nombre de Producto" => $_POST["nombre_producto"],
            "Referencia" => $_POST["referencia"],
            "Precio" => $_POST["precio"],
            "Peso" => $_POST["peso"],
            "Categoría" => $_POST["categoria"],
            "Stock" => $_POST["stock"]
        ];

        foreach ($camposObligatorios as $key => $value) 
        {
            if ($value == "") 
            {
                $mensaje .= "El campo:  $key no puede quedar vacío <br>";
            }
        }

        if($mensaje != ""){
            include_once './views/crear_producto.php';
            echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";
            die();
        }

        //Actualizar la persona
        $producto = new productoModel;
        $producto->setNombreProducto(trim($_POST["nombre_producto"]));
        $producto->setReferencia(trim($_POST["referencia"]));
        $producto->setPrecio(trim($_POST["precio"]));
        $producto->setPeso(trim($_POST["peso"]));
        $producto->setCategoria(trim($_POST["categoria"]));
        $producto->setStock(trim($_POST["stock"]));

        $respuesta = $producto->ActualizarProducto($_POST['id']);

        if($respuesta === true){
            $mensaje = "Registro actualizado con éxito";
        }else{
            $mensaje = $respuesta;
        }

        //include_once './views/editar_personas.php';
        //echo "<script>$(document).ready(function(){ ToggleMensaje('Mostrar'); });</script>";

        $this->index($mensaje);
    }

    
}
