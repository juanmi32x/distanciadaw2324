<?php




/**
* Funcion para aumentar un precio la cantidad de IVA indicado
* 
* @version: 1.0
* @author: Juan Miguel Miranda Giron
*
* @param: $precio - Cantidad sobre la que se va a incrementar el iva
* @param: $iva - impuesto que se va a incrementar al precio
*
* @return: Devuelve el precio con el iva incrementado
* @internal: El iva tiene que ser menor que 100
*/

function calcularPrecioMasIVA($precio,$iva){
$precioIva = ($precio*$iva/100);

    $impuesto = floatval(sprintf("%.2f",$precioIva));

    return $precio+$impuesto;
}




/**
* Funcion para calcular el precio sin el IVA 
* 
* @version: 1.0
* @author: Juan Miguel Miranda Giron
*
* @param: $precio - Cantidad sobre la que se va quitar el iva
* @param: $iva - impuesto que se va a quitar al precio
*
* @return: Devuelve el precio con el iva quitado. Precio base
* @internal: El iva tiene que ser menor que 100
*/
function calcularPrecioSinIVA($precio,$iva){
    $impuesto = 1+($iva/100);

    return floatval(sprintf("%.2f",$precio/$impuesto));
}


?>