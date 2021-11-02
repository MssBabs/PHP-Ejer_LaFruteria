
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_MiniCasino_BVN</title>
</head>
<body>
    <header>
        <h1> GAMEBABS MINICASINO </h1>
    </header>
    <main>
        <?php 
            include 'app/funciones.php';

            if (!isset($_REQUEST['orden'])){
                include_once 'app/entradaMiniCasino.php';
            } 
            else {
                switch ($_REQUEST['orden']){
                    case "Entrar":
                        dineroIntro();
                        include_once 'app/apuestaMiniCasino.php';
                        break;

                    case "Apostar Cantidad":
                        apostarCantidad();
                        include_once 'app/apuestaMiniCasino.php';
                        break;
    
                    case "Abandonar MiniCasino":
                        /*xx: Cookie guarda numVisitas/numJugadas*/
                        include_once 'app/salidaMiniCasino.php';
                        session_destroy();
                        break;
                }
            }  
        ?>
    </main>
</body>
</html>