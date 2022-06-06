<!DOCTYPE html>
<html lang="en">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<head>
	<meta charset="UTF-8">
	<title>Acuario</title>
	<link rel="stylesheet" href="hola.css">
	<style>
           
		
        #footer{
			background-color:black;
			color:white;
			clear:both;
			border-radius: 10px;
			text-align:center;
			padding:2px;
		}
        </style>
</head>
<body>
	<header>
		<div class="container logo-nav-container">
			<img src="imagenes/Logo acuario.png" align="center" width="140" height="160" class="logo">
		
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/hola.html">Inicio</a></li>
				<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/hey.html">Nosotros</a></li>
				<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/mar.html#slide0">Galería</a>
					<ul class="submenu">
						<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/mar.html#slide0">Peces de agua salada</a></li>
						<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/mar.html#slide21">Peces de agua dulce</a></li>
					
				</li>
            </ul>
				<li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/ss.html">Ubicación</a></li>
                <ul class="menu">
                    <li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/mar.html#slide0">Login</a>
                        <ul class="submenu">
                            <li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/login.html">Login</a></li>
                            <li><a href="file:///C:/Users/bryar/OneDrive/Escritorio/Acuario%20nuevo/registro.html">Registro</a></li>
                        
                        </ul>
            </ul>
		</nav>
	   
	</header>
	<br>
	<div class="containers">
		
        <form class="formulario">
    
            <h1>Registrate</h1>
             <div class="contenedor">
             
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                    
                    </div>
                    
                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" name="correo" placeholder="Correo Electronicó">
                    
                    </div>
                    
                    <div class="input-contenedor">
                   <i class="fas fa-key icon"></i>
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    
                    </div>
                    <input type="submit" name="registro" value="Registrate" class="button">

                    <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                    <p>¿Ya tienes una cuenta?<a class="link" href="login.html">Iniciar Sesion</a></p>
                </div>

				<?php
				include("registrar.php")
				?>
        
<div id="footer">
	<p>Mariana Montserrat Ramírez González Programación web1 7A1 DS 2021_1</p></div>


          </form>
   </ul>
 </div>
	
	
	
 </body> 
  </html>