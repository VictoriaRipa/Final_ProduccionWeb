<?php
session_start();
?>

<style>
    body {
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        height: 100vh;
    }

    .container {
        width: 45%;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .error {
        color: red;
    }

    form {
        margin-top: 20px;
    }

    h2 {
        margin-bottom: 10px;
        text-align: center;
    }

    div {
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 8px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .center {
        text-align: center;
    }
</style>

<div class="container">
    <form method="post" action="login.php">
        <h2>Iniciar sesión</h2>
        <div><input type="email" placeholder="Ingresa tu Email" name="email" /></div>
        <div><input type="password" placeholder="Ingresa tu Clave" name="clave" /></div>
        <div><input type="submit" value="Ingresar" /></div>
    </form>
</div>

<div class="container">
    <form method="post" action="registro.php">
        <h2>Registrarse</h2>
        <div><input type="text" placeholder="Ingresa tu Nombre" name="nombre" /></div>
        <div><input type="text" placeholder="Ingresa tu Apellido" name="apellido" /></div>
        <div><input type="email" placeholder="Ingresa tu Email" name="email" /></div>
        <div><input type="password" placeholder="Ingresa tu Clave" name="clave" /></div>
        <div><input type="submit" value="Registrarse" /></div>
    </form>
</div>
