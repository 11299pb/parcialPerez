<?php
require 'Conexion.php';
// se crea la conexion a bd 
class Insumo extends Conexion{
    public $insumos_id;
    public $insumos_nombre;
    public $insumos_existencia;
    public $insumos_marca;
    public $insumos_proveedor;
    public $insumos_precio;

    public function __construct($args = [] )
    {
        $this->insumos_id = $args['insumos_id'] ?? null;
        $this->insumos_nombre = $args['insumos_nombre'] ?? '';
        $this->insumos_existencia = $args['insumos_existencia'] ?? '';
        $this->insumos_marca = $args['insumos_marca'] ?? '';
        $this->insumos_proveedor = $args['insumos_proveedor'] ?? '';
        $this->insumos_precio = $args['insumos_precio'] ?? '';
    }
    public function guardar(){
        $sql = "INSERT INTO insumos(insumos_nombre, insumos_existencia, insumos_marca, insumos_proveedor, insumos_precio) values('$this->insumos_nombre','$this->insumos_existencia', '$this->insumos_marca', '$this->insumos_proveedor', '$this->insumos_precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}