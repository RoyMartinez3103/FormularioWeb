<?php include('registro.php'); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario SC</title>
  </head>
  <link href="style.css" rel="stylesheet"/>
  <body>
    <form  method="post">

    <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Escudo-UNAM-escalable.svg" width="120" height="120" margin: 0 auto/>

    <h1> Formulario </h1>
    <ul>
        <label for="name">Nombre(s):</label>
        <input type="text" id="name" name="user_name" /><br><br>

        <label for="LastName">Apellidos:</label>
        <input type="text" id="LastName" name="user_last" /><br><br>

        <label for="birthdate">Fecha de nacimiento:</label>
        <input type="date" id="birthdate" name="user_birth"/><br><br>

        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="user_mail" /><br><br>

        <label for="tel">Teléfono:</label>
        <input type="tel" id="tel" name="tel" /><br><br>

    <h3>Domicilio</h3>
        <label for="street">Calle:</label>
        <input type="text" id="street" name="street" /><br><br>

        <label for="outNum">Número Exterior:</label>
        <input type="number" id="outNum" name="outNum" min="0"/><br><br>

        <label for="postCode">CP:</label>
        <input type="number" id="postCode" name="postCode" min="0"/><br><br>

        <label for="colony">Colonia:</label>
        <input type="text" id="colony" name="colony" /><br><br>

        <button type="submit" name="enviar">Enviar</button>
    </ul>
    </form>
    <table>
        <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>FechaNacimiento</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Calle</th>
        <th>Numero</th>
        <th>CodigoPostal</th>
        <th>Colonia</th>
        </thead>
        <tbody>
            <?=cargarTabla($connection) ?>
        </tbody>
    </table>
  </body>
</html>