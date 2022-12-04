<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    
    if( !isset($_SESSION['usuario']) || empty($_SESSION['usuario']) ) {
        header ("Location: ./Sesion.html");
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0")>      
    </head>
    <body>
        <hi>Pagina principal de Aplicacion de: </h1>
        <button type = "button"><?php echo $_SESSION['usuario'];?></button>
    </body>
</html>