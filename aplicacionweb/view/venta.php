<?php
//session_start();
require "../controller/seguridad.php";
?>
<h3>Nota de venta</h3>
<?php
    echo "Nombre usuario: ".$_SESSION['nombre'];
    echo "<br>Correo Electrónico: ".$_SESSION['correo'];
    echo "<br>Monto compra: $7450";
?>
<br><hr>
<button onclick="location.href='../controller/salir.class.php'">Cerrar sesión</button>