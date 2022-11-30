<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0")>
        <title>Cookies</title>        
    </head>
    <body>
        <?php
        if(isset($_COOKIE['UltimaVisita'])){
            printf("Yo estuve aqui en la fecha: %s",$_COOKIE['UltimaVisita']);
            $fechahoy = date('Y/m/d H:i:s');
            setcookie("UltimaVisita",$fechahoy,time() + (7 * 24 * 60 * 60));
        }
        else{
            printf("Nunca he estado aqui. Procedo a crear una cookie<br>");

            $fechahoy = date('Y/m/d H:i:s');
            $siguienteSemana = time() + (7 * 24 * 60 * 60);
            $fechaExpira = date('Y/m/d H:i:s',$siguienteSemana)."<br>";

            echo '<b>Fecha de creacion de la cookie: </b>'.$fechahoy.'<br>';
            echo '<b>Fecha de vencimiento de la cookie: </b>'.$fechaExpira.'<br>';

            setcookie("UltimaVisita",$fechahoy,time() + (7 * 24 * 60 * 60));
        }
        ?>
    </body>
</html>