<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO</title>
</head>

<body>
    <h1>BIENVENIDO</h1>

    <form action="../Control/validaLogin.php" method="post">
        <label for="correo">Email</label>
        <input type="email" id="correo" placeholder="Ingrese su correo" name="Correo" autofocus required>
        <label for="contrasena">Password</label>
        <input type="password" id="contrasena" placeholder="Ingrese su contraseña" name="Contraseña" required>
        <input type="submit" name="verificacion" value="Ingresar">
        <a href="../View/createAccount.php">Crea Una cuenta</a>
    </form>
</body>

</html>
