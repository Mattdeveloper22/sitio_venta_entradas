<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Dashboard/styles/login.css">
    <title>Dashboard</title>
</head>
<body>
    <header class="banner">
        <h1>Panel de administracion</h1>
    </header>
    <main>
        <h2 class="inicio">Iniciar Sesion</h2>
        <form action="panel.php" class="form">
            <div class="form_email">
                <label for="email">Email del usuario</label>
                <input type="email" name="email" id="email" placeholder="Ingrese su Email">
            </div>
            <div class="form_pass">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su password">
            </div>
            <button type="submit" class="form_button">Entrar</button>
        </form>
    </main>
</body>
</html>