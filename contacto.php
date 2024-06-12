<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!--header-->
     <header class="header">
        <a href="index.html" class="logo"><img src="img/logo3.png" alt=""></a>
        <nav class="navbar">
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="menu.html">Menu</a>
            <a href="galleria.html">Galeria</a>
            <a href="contacto.html">Contacto</a>
        </nav>

        <div class="icons">
            <div id="cart" class="fas fa-shopping-cart"></div>
            <div id="login" class="fas fa-user"></div>
            <div id="menu" class="fas fa-bars"></div>
        </div>
    </header>


    <div class="heading">
        <h1>Contacto</h1>
        <p><a href="index.html">Inicio>>></a>Contacto</p>
    </div>


    <!-- contact section starss -->
    
    <section class="contact">
        <div class="icon-container">
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Nuestro Teléfono</h3>
                <p>+51 929 349 682</p>
            </div>
            
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Nuestro Correo Electrónico</h3>
                <p>tomatina@gmail.Com</p>
            </div>

            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Nuestra dirección</h3>
                <p>Chancay, Huaral</p>
            </div>
        </div>
        <div class="row">
            <form method="post">
                <h3>Contacta con nosotros</h3>
                <div class="inputBox">
                    <input type="text" placeholder="Ingresa tu nombre" class="box" name="nombre">
                    <input type="email" placeholder="Ingresa tu correo"class="box" name="correo">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="Ingresa tu teléfono" class="box" name="telefono">
                    <input type="text" placeholder="Ingresa tu dirección" class="box" name="direccion">
                </div>    
                <textarea placeholder="Ingresa tu mensaje" cols="30" rows="10" name="mensaje"></textarea>
                <input type="submit" value="ENVIAR" class="btn" name="register">
            </form>
            <?php 
            include("registrar.php");
            ?>

        </div>


    </section>
    
        <!--footer-->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>encuentranos en</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, similique!</p>
                <div class="share">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>  

            <div class="box">
                <h3>contactanos</h3>
                <p>987654321</p>
                <a href="" class="link">tomatina@gmail.com</a>
            </div>
    
            <div class="box">
                <h3>ubicanos</h3>
                <p>Av.Saenz Peña 230 <br>
                    Chancay -
                    Huaral</p>
            </div>
        </div>
        <div class="credit">creado por <span>MichaelDev</span> | ©todo los derechos reservados</div>
        
    </section>
    <script src="script.js"></script>
    <script defer>
        // Este script escuchará los mensajes del servidor y mostrará una alerta
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('message')) {
                alert(urlParams.get('message'));
            }
        };
    </script>
</body>
</html>