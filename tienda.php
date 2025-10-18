<?php

include 'producto.php';
include 'inventario.php';


$television = new Producto("Televisión", 500.00, 10);
$radio = new Producto("Radio", 150.00, 12);
$ordenador = new Producto("Ordenador", 1000.00, 5);



$inventario = new Inventario();


$inventario->agregarProducto($television);
$inventario->agregarProducto($radio);
$inventario->agregarProducto($ordenador);


echo "<b>Listar todos los productos en el inventario:</b><br><br>";

$inventario->listarProductos();



echo "<br><b>Vender algunas unidades:</b><br><br>";

$television->vender(2);
echo "<br>";
$inventario->listarProductos();


echo "<br><b>Intentar vender más unidades de las que hay en stock</b><br><br>";

$radio->vender(20);
echo "<br>";
$inventario->listarProductos();

echo "<br><b>Reponer stock</b><br><br>";

$ordenador->reponer(20);
$inventario->listarProductos();

echo "<br><b>Mostrar el valor total</b><br><br>";

$inventario->listarProductos();

?>





