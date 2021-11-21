<?php 
    session_start();

    function nombUsu(){
        if(isset($_REQUEST['nombUsu'])){
            /*htmlspecialchars()-> COMPRUEBA: TEXTO SIN INSTRUCCIONES HTML*/
            $_SESSION["Usuario"]= htmlspecialchars($_REQUEST['nombUsu']);   
        }
    }

    function anotarFruta(){
        if(isset($_REQUEST['opFruta']) && isset($_REQUEST['numFruta'])){
            $fruta=$_REQUEST['opFruta'];
            $cantidad=$_REQUEST['numFruta'];

            if(isset($_SESSION["Frutas"] [$fruta])){
                $cantidad+=$_SESSION["Frutas"][$fruta];
            }

            /*$_SESSION["Frutas"] [Clave] = Valor;*/
            $_SESSION["Frutas"] [$fruta] = $cantidad;   
        }
    }
?>