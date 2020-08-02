<!DOCTYPE html>
<!DOCTYPE html>
<head>
	<meta name="google-site-verification" content="cUI41KHpyy72nDELART-NtAu6c0YTr769c-Wy2wYO5Y" />
	<meta name="keywords" content="diseño web, codigo, programacion, html, css, javascript, tutoriales">
	<meta name="author" content="Migracion-Venezuela-Argentina">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Venezolanos en Buenos Aires</title>	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<script src="https://kit.fontawesome.com/f47412a73a.js" crossorigin="anonymous"></script>         
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">	
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilosFormulario.css">    

</head>
 
<body>
	<!--NABVAR-->		
    <nav class="navbar text-center bg-primary fixed-top col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="index.html" class="navbar-brand pl-0" id="harina"> <img src="HARINA-PAN.png" id="harinapan" tabindex="0" class="rounded" height="35" alt="Harinapan"></a>
            <div class="" id="">
                <ul class="navbar-nav mr-auto enlaces-menu">                           
                    <li class="nav-item">
                        <a href="index.html" class="nav-link px-3 text-white">INICIO</a>                           
                    </li>
                    <!-- <li class="nav-item">
                        <a href="formulario.html" class="nav-link px-3 text-white">CONTACTO</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="proposito.html" class="nav-link px-3 text-white">PROPÓSITO</a>
                    </li>                         
                </ul>              
            </div>           
    </nav>
        <h1 class="text-center h1-responsive">Venezolanos en Buenos Aires</h1>     
                  
        <div class="bandera bandera-responsive">                  
            <div class="bola1 mt-0 bolas"> </div>
            <div class="bola2 mx-0 bolas" > 
                <spam class="estrellas">*******</spam>                   
            </div>
            <div class="bola3 mx-0 bolas" > </div>
        </div>

        <!--FORMULARIO--> 
        <div class="contenedor container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" class="formulario" id="formulario" name="formulario">
                        
                        <div class="contenedor-inputs form-group">
                            <label for="nombre">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" placeholder="Escribe tu nombre y apellido">

                            <label for="correo">Correo</label>                           
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>" placeholder=" Escribe tu correo">

                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" class="form-control textarea" id="mensaje" cols="20" value="" placeholder="Escribe tu mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
                        
                                    
                            <div class="terminos form-check">                                
                                <label class="form-check-label pr-4 my-1" for="terminos">Acepto Terminos y Condiciones</label>
                                <input  class="form-check-input my-2" type="checkbox" name="terminos" id="terminos">
                            </div>

                            <!-- <MUESTRA ERRORES CON JS> -->
                            <ul class="error" id="error"></ul>

                            <!-- <MUESTRA ERRORES CON PHP> -->
                            <?php if (!empty($errores)): ?>
                                <div class="alert-error">
                                    <?php echo $errores; ?>
                                </div>

                            <?php elseif($enviado): ?>
                                <div class="alert-success">
                                    <p>Mensaje enviado exitosamente</p>
                                </div>
                            <?php endif ?>
                            
                            

                            <!-- <MUESTRA ÉXITO CON PHP> -->
                            <!-- <div class="alert-success">Mensaje enviado exitosamente</div> -->

                            <button type="submit" name="submit" class="btn btn-primary" value="Enviar" >Enviar</button>
                        </div>    
            
                        <!-- <input type="submit" class="btn" value="Enviar"> -->
                       
                        <!-- <div class="sexo">
                                <input type="radio" name="sexo" id="hombre" value="hombre">
                                <label for="hombre" class="label-radio hombre">Hombre</label>
                                        
                                <input type="radio" name="sexo" id="mujer" value="mujer">
                                <label for="mujer" class="label-radio mujer">Mujer</label>
                            </div> -->
                    </form>
                </div>
            </div>
        </div>
	
		<!--FOOTER-->   

    <hr class="hr">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="formulario.js"></script> -->
    
</body>
</html>
</html>