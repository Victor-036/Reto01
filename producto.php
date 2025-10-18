<?php

class Producto{
    public string $nombre;
    public float $precio;
    public int $stock;
    public int $id;
    private static int $contadorId = 1;


    public function __construct($nombre, $precio, $stock) {

        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;

    }
    public function mostrarInformacion(){
        return "El producto es: $this->nombre, su precio es: $this->precio y el stock es: $this->stock";
    }

    public function vender($cantidad){
        if ($cantidad <= 0) {
            echo "Venta denegada: la cantidad debe ser mayor que cero<br>";
            return false;
        }

        if ($cantidad <= $this->stock) {
            $this->stock -= $cantidad;
            echo "Venta completada: $cantidad unidades de $this->nombre. Stock restante: $this->stock<br>";
            return true;
        } else {
            $vendidas = $this->stock;
            $sobras = $cantidad - $this->stock;
            $this->stock = 0;
            echo "Venta dividida: se vendieron $vendidas unidades de $this->nombre.<br>No se pudieron vender $sobras unidades. Stock ahora: 0<br>";
            return false;
        }
    }


    public function reponer($cantidad){
    if($cantidad > 0){
        $this->stock += $cantidad;
        return true;
    }else{
        echo("La cantidad a reponer debe ser mayor que cero");
        return false;
    }

}
}

?>