<?php

class Inventario {
    public array $productos = [];

    public function agregarProducto(Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function buscarProductoPorId(int $id){
        foreach ($this->productos as $producto) {
            if ($producto->id === $id) {
                return $producto;
            }
        }
        echo "Producto no encontrado";
        return null;
    }

    public function listarProductos(){
        for ($i = 0; $i < count($this->productos); $i++) {
            echo $this->productos[$i]->mostrarInformacion() . "<br>";
        }
    }

    public function valorTotalInventario() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->precio * $producto->stock;
        }
        return $total;
    }
}

?>
