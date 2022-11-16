<DOCTYPE html>
 <html lang="es">
     <head>
         <title> psicologia en adolecentes mlikota y galvan</title>
         <meta http-equp="Content-Type"
         content="text/html; charset=utf-8">
         <title>Prueba</title>
         <link rel="shortcut icon" href="img/triste.png">
         <link rel="stylesheet" href="pruebas.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">

     </head>
     <body>
         <header>
            <h1>
            <nav>
                <ul>
                <li><a href="index.php"> Inicio </a> </li>
                <?php 
                
                $servername = "127.0.0.1";
                $database = "mydb";
                $username = "alumno";
                $password = "alumnoipm";
    
                $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


              if (!$conexion) {
                die("Conexion fallida: " . mysqli_connect_error());
                       }
                   else{
       //

                      $resultado = mysqli_query($conexion,"select * from tipostranstornos;");
                    while($fila=mysqli_fetch_assoc($resultado)){ // recorremos cada fila obtenida y mostramos el nombre y el apellido
                      ?>
                      <li><a href="<?php echo $fila["nombre"] ?>.html"> <?php echo $fila["nombre"] ?> </a> </li> 
                      <?php
                  }
    
                }
          
                
                ?>
                
                 <li><a href="ayuda.html">Ayuda <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bandaid" viewBox="0 0 16 16">
                    <path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242ZM12.293 8 8.027 3.734 3.738 8.031 8 12.293 12.293 8Zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Z"/>
                    <path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707ZM8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707Z"/>
                  </svg> </a></li>
                </ul>
            </nav>

        </h1>
            <h2>
            <img class="logo" src="img/psicologia.png" alt="">
            </h2>

            <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>

                
                        <div class="contenido"></div>
                    </div>
                </div>
                <div class="menu secundario"></div>
            </div>
     
        </header>

        <main>
          <section class="contenedor sobre-nosotros">
            <h3 class="titulo"> Algunos de los problemas comunes en la salud mental:</h3>
          <div class="contenedor-sobre-nosotros">
            <img src="img/senialando1-removebg-preview.png" alt="" class="imagen-about-us">
            <div class="contenido-textos">
            <h4><span> 1</span>depresion</h4>
            <p>Según el DSM-IV el trastorno depresivo mayor se caracteriza por la presencia de un estado de ánimo patológicamente bajo y la dificultad para obtener placer mediante la realización de actividades gratificantes (anhedonia). La distimia es un trastorno depresivo cuyos síntomas tienen una intensidad menor pero que se mantienen de forma crónica, durante al menos 2 años.</p>
            <h4><span>2</span>transtorno de ansiedad</h4>
            <p>Las personas con trastorno de ansiedad generalizada se preocupan en exceso y de forma sistemática a causa de sus expectativas negativas, a menudo irracionales. Esto hace que aparezcan síntomas físicos y cognitivos asociados como insomnio, irritabilidad, dolor de estómago, sudoración y tensión muscular.</p>
            <h4><span>3</span>transtornos alimenticios</h4>
            <p>La anorexia y la bulimia nerviosas son asociadas frecuentemente a la adolescencia y a la juventud, si bien pueden aparecer en cualquier momento de la vida. Factores de tipo psicosocial están contribuyendo en la actualidad a un adelanto de la edad media de inicio de estos trastornos de la conducta alimentaria en buena parte del mundo.</p>
            </div>
     </div>

         

        </main>




     </body>
 </html>