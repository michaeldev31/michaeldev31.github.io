<?php 
include("conexionDB.php");
if (isset($_POST['register'])){
    if(strlen($_POST['nombre'])  >= 1 &&
        strlen($_POST['correo'])  >= 1 &&
            strlen($_POST['telefono'])  >= 1 &&
                strlen($_POST['direccion'])  >= 1 &&
                    strlen($_POST['mensaje'])  >= 1){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $mensaje = trim($_POST['mensaje']);
        $consulta = "INSERT INTO datoscontacto( nombre, correo, telefono, direccion, mensaje) VALUES ('$nombre','$correo','$telefono','$direccion','$mensaje')";
        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {
            ?>
            <h3 class="enviado">¡Te has contactado correctamente!</h3>
            <?php
        } else{
            ?>
            <h3 class="noEnviado">¡Ups , ha ocurrido un error!</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="noEnviado">¡Por favor ,completa todos los campos correctamente!</h3>
        <?php
    }
}
?>

