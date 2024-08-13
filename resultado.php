 <?php
$PRODUCTO_1=$_POST ['PRODUCTO_1'];
$PRODUCTOS_2=$_POST ['PRODUCTOS_2'];
$PRODUCTOS_3=$_POST ['PRODUCTOS_3'];
$PRECIO_1=$_POST ['PRECIO_1'];
$PRECIO_2=$_POST ['PRECIO_2'];
$PRECIO_3=$_POST ['PRECIO_3'];
$suma=$PRECIO_1+$PRECIO_2+$PRECIO_3;
$descuento=$suma*0.16/100
$descuentos=$suma-$descuento


echo "SUS PRODUCTOS SON:   ".$PRODUCTO_1;
echo "SUS PRODUCTOS SON:   ".$PRODUCTOS_2;
echo "SUS PRODUCTOS SON:   ".$PRODUCTOS_3;
  echo "LA SUMA DE TUS PRODUCTOS SON:       ".$suma;
  echo "EL DESCUENTO QUE SE LE APLICA ES:       ".$descuentos;
?>

