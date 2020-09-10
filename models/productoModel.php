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
}
