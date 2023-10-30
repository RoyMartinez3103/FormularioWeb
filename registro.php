<?php

$connection = mysqli_connect('localhost', 'root','','formularioWeb' ) or die(mysqli_error($mysqli));

    if (isset($_POST['enviar'])) {
    insertar($connection);
    }


function insertar($connection) {
    $nombre = $_POST['user_name'];
    $apellido = $_POST['user_last'];
    $birthdate = $_POST["user_birth"];
    $email = $_POST["user_mail"];
    $tel = $_POST["tel"];
    $calle = $_POST['street'];
    $numExt = $_POST["outNum"];
    $postCode = $_POST["postCode"];
    $colonia = $_POST["colony"];

    $consulta = "INSERT INTO usuario(nombre, apellidos, fechaNac, correo, telefono, calle, num, codPostal, colonia) 
    VALUES ('$nombre', '$apellido', '$birthdate', '$email', '$tel', '$calle', '$numExt', '$postCode', '$colonia')";

    mysqli_query($connection, $consulta);
}

function cargarTabla($connection){
    $consulta = "SELECT * FROM usuario";
    $resultado = mysqli_query($connection, $consulta);

    while($fila=mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila["nombre"];
        echo "<td>".$fila["apellidos"];
        echo "<td>".$fila["fechaNac"];
        echo "<td>".$fila["correo"];
        echo "<td>".$fila["telefono"];
        echo "<td>".$fila["calle"];
        echo "<td>".$fila["num"];
        echo "<td>".$fila["codPostal"];
        echo "<td>".$fila["colonia"];
        echo "<tr>";
    }
    mysqli_close($connection);
}

?>
