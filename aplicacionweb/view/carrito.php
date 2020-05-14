<?php
//session_start();
require "../controller/seguridad.php";
?>
<h3>Carrito de compras</h3>
<?php
    echo "Nombre usuario: ".$_SESSION['nombre'];
    echo "<br>Correo Electrónico: ".$_SESSION['correo'];
?>
<form method="post" action="../view/venta.php">
<br><hr><button type="submit" name="comprar" value="comprar">Comprar producto</button></form>