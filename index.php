<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_EjerLaFruteria_BVN</title>
</head>
<body>
    <header>
        <h1>La Frutería Del Siglo XXI</h1>
    </header>
    <main>
        <?php 
            include_once 'app/funciones.php';

            if ( !isset($_REQUEST['orden']) || $_REQUEST['orden'] == "Nuevo Cliente" ){
                include_once 'app/nombUsuEntrada.php';
            } 
            else {
                switch ($_REQUEST['orden']){
                    /*1º Anotar(No break): Paso previo para inciar guardar frutas en la sesión*/
                    case "Anotar":
                        anotarFruta();

                    case "Entrar":
                        nombUsu();
                        include_once 'app/realizarPedido.php';
                        break;
                    
                    case "Terminar":
                        include_once 'app/finalizarPedido.php';
                        session_destroy();
                        break;  
                }
            }
        ?>
    </main>
</body>
</html>