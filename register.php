<?php

include("con_db.php");

if (isset($_POST['register'])){
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['message']) >= 1)  {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, mensaje, fecha_reg) VALUES ('$name','$email','$message','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Te has inscrito correctamente<h3> 
            <?php
            } else {
                ?>
            <h3 class="bad">Ha ocurrido un error<h3> 
                <?php
                }  
            } else {
                ?>
                <h3 class="bad">Por favor rellene todos los campos<h3> 
                    <?php
            }
}


?>