
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>    Petnow  </title>
        <mate name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <script src="https://kit.fontawesome.com/e9acfae8a2.js" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100&display=swap" rel="stylesheet">
        <link rel="preload" href="./CSS/stylePagP.css" as="style">
        <link rel="preload" href="./CSS/estilos2.css" as="style">
        <link rel="stylesheet" href="./CSS/stylePagP.css">
        <link rel="stylesheet" href="./CSS/estilos2.css">
        <link rel="shortcut icon" href="../Imgs/LogoDog.jpg">
        </head>
 <body class="body-inicios">
 <header>
        <main>
            <nav class="menu">
                <section class="menu_container">
                    <img src="../Imgs/perro-sentado.png" class="logo_img">
                    <a href="./Index.html"> <h1 class="menu_logo">PetNow</h1></a>
                   
                    <ul class="menu_links">
                        <li class="menu_item">
                            <a href="./Paginaprincipal.php" class="menu_link">Home</a>
                        </li>
                        <li class="menu_item menu_item--show">
                            <a href="./Mascotas.html" class="menu_link">Mascotas<img src="../Imgs/arrow.svg" class="menu_arrow"></a>
                            <ul class="menu_nesting">
                                <li class="menu_inside">
                                    <a href="./Alimentos.html" class="menu_link menu_link--inside"><img src="../Imgs/comida.svg" class="iconRed"></img>Alimentos</a>
                                </li>
                                <li class="menu_inside">
                                    <a href="./Premios.html" class="menu_link menu_link--inside"><img src="../Imgs/premio.svg" class="iconRed"></img>Premios</a>
                                </li>
                                <li>
                                    <a href="./Accesorios.html" class="menu_link menu_link--inside"><img src="../Imgs/accesorio.svg" class="iconRed"></img>Accesorios</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu_item menu_item--show">
                            <a href="./Marcas.html" class="menu_link">Marcas<img src="../Imgs/arrow.svg" class="menu_arrow"></a>
                            <ul class="menu_nesting">
                                <li class="menu_inside">
                                    <a href="./HappyDog.html" class="menu_link menu_link--inside"><img src="../Imgs/patita.svg" class="iconRed">Happy Doggy</a>
                                </li>
                                <li class="menu_inside">
                                    <a href="./Pedigree.html" class="menu_link menu_link--inside"><img src="../Imgs/patita.svg" class="iconRed">Pedigree</a>
                                <li class="menu_inside">
                                    <a href="./Alphaspirit.html" class="menu_link menu_link--inside"><img src="../Imgs/patita.svg" class="iconRed">Alpha Spirit</a>
                                </li>
                                <li class="menu_inside">
                                    <a href="./Dogchow.html" class="menu_link menu_link--inside"><img src="../Imgs/patita.svg" class="iconRed">Dog chow</a>
                                </li>
                                <li class="menu_inside">
                                    <a href="./Purina.html" class="menu_link menu_link--inside"><img src="../Imgs/patita.svg" class="iconRed">Purina</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu_item">
                            <a href="./Promociones.html" class="menu_link">Promociones</a>
                        </li>
                        <li class="menu_item menu_item--show">
                            <a href="./Contacto.html" class="menu_link">Contacto<img src="../Imgs/arrow.svg" class="menu_arrow"></a>
                            <ul class="menu_nesting">
                                <li class="menu_inside">
                                    <a class="menu_link menu_link--inside" href="#"><img src="../Imgs/phone.svg" class="iconRed"></img> 479 482 3065</a>
                                </li>
                                <li class="menu_inside">
                                    <a class="menu_link menu_link--inside" href="#"><img src="../Imgs/email2.svg" class="iconRed"></img> petnow@servicio.com</a>
                                <li class="menu_inside">
                                    <a class="menu_link menu_link--inside" href="#"><img src="../Imgs/whatsapp.svg" class="iconRed"></img> 5598 3420 92</a>
                                </li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu_hamburguer">
                        <img src="../Imgs/menu.svg" class="menu_img">
                    </div>
                    <div class="nav_log">

                       <a id="sing_up" href="./Registro.php"><img src="../Imgs/reg.svg" class="menu_img2" href="./Registro.php"></a>
                                    
                    </div>  
                    <script type="text/javascript">
        
                        function mostrarManu(){
                        document.getElementById('sing_up').style.display='none';
               
                        }
                    </script>
                </section>      
            </nav>  
            <script src="../Controlador/JS/menu.js"></script>   
        </main>
    </header>
    <form action="../Modelo/validar.php" class="formulario" method="POST">
    </br>
</br>
        <h1>Inicia sesion en PetNow</h1>
      <DIV class="contenedor">       
        <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" required  placeholder="Correo Electronico" name="email">
                    </div>
                    <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="password" required  placeholder="Contraseña" name="password">
                            </div>
                            <input class="button" type="submit" value="Iniciar Sesion">
                            <p> ¿Olvidasye tu contraseña? <a class="link" href="./Contacto.html" >Aqui te ayudamos</a></p>
     <p>¿No tienes una cuenta?<a class="link" href="./Registro.php" >Registrate</a></p>
                        </DIV>     
<br>
<br>
    </form>
    <footer class="footer margen-interno">
        <div class="conteiner-footer-All">
<div class="conteiner-body">

<div class="Col1">
<h1>
    Mas informacion sobre PetNow
</h1>
<p>
    Petnow es la mejor opcion de tiendas en linea que existe en mexico 
    con una apmlica variedad de productos de alta calidad con los que podras consentir
    a tu mascota.
</p>
<br>
<br>
<nav class="pie">
    <a href="TareaCV.html" >Desarrollado por Equipo Dinamita</a>
</nav>
<br>
<br>
</div>
<div class="social">
<h1>Redes Sociales</h1>
<div class="row">
    <a href="https://www.facebook.com/zuck"><i class="fab fa-facebook-square"></i>Facebook</a>
</div>
<div class="row">
    <a href="https://www.instagram.com/zuck/?hl=es-la"><i class="fab fa-instagram"></i>Intagram</a>
</div>
<div class="row">
    <a href="https://twitter.com/finkd?lang=es"><i class="fab fa-twitter"></i>Twitter</a>
</div>      
</div>
<div class="Col2">
<h1>
    Infomacion de Contacto
</h1>
<div class="row2">
   <img src="../Imgs/ubi.svg" class="iconRed2">
   <label>Real del Ocampo en colonia Juarez 115-A</label>
</div>
<div class="row2">
    <img src="../Imgs/phone.svg" class="iconRed2">
<label>477-705-8079</label>
</div>
<div class="row2">
    <img src="../Imgs/email2.svg" class="iconRed2">
<label>Dinamita.Equipo@hotmail.com</label>
</div>

</div>
</div> 

<div class="conteiner-footer">
<nav class="copyright">
    ©℗®™ Derechos resevados |
<a href="TareaCV.html" >AVR</a>
</nav>
<div class="informacion">
<a href=""><i class="fas fa-question-circle"></i>Informacion Adicional</a>
<a href=""><i class="fas fa-landmark"></i>Privacidad y Politicas</a>
<a href=""><i class="fas fa-clipboard-check"></i>Terminos y Condiciones</a>

</div>
</div>
</div>
    </footer>
</body>
</html>


