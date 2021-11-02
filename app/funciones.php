<?php
    session_start();

    function dineroIntro(){
        if(isset($_REQUEST['dineroDisponible'])){
            $_SESSION["dineroDisponible"]= $_REQUEST['dineroDisponible'];   
        }
    }

    function apostarCantidad(){
        
        if(isset($_REQUEST['dineroApuesta'])){
            $_SESSION["dineroApuesta"]= $_REQUEST['dineroApuesta']; 
            
            if($_SESSION["dineroApuesta"]<=$_SESSION["dineroDisponible"]){
                
                if(isset($_REQUEST['apuesta'])){
                    $_SESSION["apuesta"]= $_REQUEST['apuesta']; 
                    
                    $numRandom= mt_rand(1, 2);
                    $apuestaRandom = ($numRandom==1) ? "IMPAR" : "PAR";

                    if($_SESSION["apuesta"] == $apuestaRandom){
                        $_SESSION["dineroDisponible"]+=$_SESSION["dineroApuesta"];
                        $_SESSION["resu"]= "Resultado de la apuesta:". $_SESSION["apuesta"]. "\n¡¡GANASTE!!";
                    } else{
                        $_SESSION["dineroDisponible"]-=$_SESSION["dineroApuesta"];
                        $_SESSION["resu"]= "Resultado de la apuesta:". $_SESSION["apuesta"]. "\n¡¡PERDISTE!!";
                    }

                }else{
                    $_SESSION["resu"]= "ERROR, No se ha seleccionado ningun tipo de apuesta";
                }
                
            }else{
                $_SESSION["resu"]= "ERROR, No dispone de". $_SESSION["apuesta"]. "€ disponibles";
            }
        }
    }
?>