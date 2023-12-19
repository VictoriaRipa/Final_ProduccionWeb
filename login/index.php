
<?php
session_start( );
?>

<style>
body {
	background-color: #ccc;
	display: flex;
	justify-content: center;
	align-items: center;
}

.container {
	width: 45%;
	background-color: white;
	padding: 20px;
	border-radius: 5px;
}

.error {
	color: red;
}


form {
	margin-top: 20px;
}

form h2 {
	margin-bottom: 10px;
}

form div {
	margin-bottom: 10px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
	width: 100%;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

form input[type="submit"] {
	width: 100%;
	padding: 8px;
	background-color: #4CAF50;
	color: white;
	border: none;
	border-radius: 3px;
	cursor: pointer;
}

form input[type="submit"]:hover {
	background-color: #45a049;
}

.center {
	text-align: center;
	text-justify: auto;
}
</style>


<div class="container">
	<form method="post" action="login.php">
		<h2>LOGIN</h2>
		<div><input type="nombre" placeholder="Ingresa tu nombre" name="nombre" /></div>
		<div><input type="apellido" placeholder="Ingresa tu apellido" name="apellido" /></div>
		<div><input type="email" placeholder="Ingresa tu Email" name="email" /></div>
		<div><input type="password" placeholder="Ingresa tu clave" name="clave" /></div>
		<div><input type="submit" value="Ingresar" /></div>	
	</form>
</div>

<div class="container">
	<form method="post" action="alta.php">
		<h2>ALTA</h2>
		<div><input type="nombre" placeholder="Ingresa tu nombre" name="nombre" /></div>
		<div><input type="apellido" placeholder="Ingresa tu apellido" name="apellido" /></div>
		<div><input type="email" placeholder="Ingresa tu email" name="email" /></div>
		<div><input type="password" placeholder="Ingresa tu clave" name="clave" /></div>
		<div><input type="submit" value="Dar de alta" /></div>
	</form>
</div>
