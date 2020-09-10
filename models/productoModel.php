<?php

include_once './models/baseModel.php';

class productoModel extends baseModel
{
    private $nombreProducto;
    private $referencia;
    private $precio;
    private $peso;
    private $categoria;
    private $stock;
    private $fechaCreacion;
    private $fechaUltimaVenta;
    
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    public function getAll()
    {
        $result = true;

        $sql = "
            SELECT
                *
            FROM 
                productos
        ";

        $productos = $this->db->query($sql);

        if ($productos && $productos->num_rows >= 1) 
        {
            $result = $productos;
        }else {
            $result = false;
        }

        return $result;
    }

    public function GuardarProducto()
    {
        $result = true;

        $sql = "
            INSERT INTO
                productos
            (
                nombre_producto,
                referencia,
                precio,
                peso, 
                categoria,
                stock,
                fecha_creacion
            )VALUES(
                '{$this->nombreProducto}',
                '{$this->referencia}',
                '{$this->precio}',
                '{$this->peso}',
                '{$this->categoria}',
                '{$this->stock}',
                '{$this->fechaCreacion}'
            )
        ";

        $save = $this->db->query($sql);

        if(!$save){
            $result = "No se pudo ingresar el registro en la BD";
        }


        return $result;
    }

    public function ConsultarProducto(int $id)
    {
        $result = true;

        $sql= "
            SELECT
                *
            FROM
                productos
            WHERE
                id = {$id}
        ";

        $producto = $this->db->query($sql);

        if($producto && $producto->num_rows == 1){

            while($pro = $producto->fetch_object()){

                $this->nombreProducto = $pro->nombre_producto;
                $this->referencia = $pro->referencia;
                $this->precio = $pro->precio;
                $this->peso = $pro->peso;
                $this->categoria = $pro->categoria;
                $this->stock = $pro->stock;

                $result = true;
            }
            
        }else{

            $result = false;
        }

        return $result;
    }

    public function ActualizarProducto(int $id)
    {
        $result = true;

        $sql = "
            UPDATE
                productos
            SET
                nombre_producto = '{$this->nombreProducto}',
                referencia = '{$this->referencia}',
                precio = {$this->precio},
                peso = {$this->peso},  
                categoria = '{$this->categoria}',
                stock =  {$this->stock}
            WHERE   
                id = {$id} 
        ";

        
        $save = $this->db->query($sql);
        
        if(!$save){
            $result = "No se pudo actualizar el registro en la BD";
        }

        return $result;
    }
}
