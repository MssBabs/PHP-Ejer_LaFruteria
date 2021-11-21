<form name="finalizarPedido" method="">

    <h3> Este es su pedido: </h3>
    <table>
        <?php
        if(isset($_SESSION["Frutas"])){
            foreach($_SESSION["Frutas"] as $fruta => $cantidad){
                echo "<tr>
                        <td>$fruta</td>
                        <td>$cantidad</td>
                    </tr>";
            }
        }
        ?>
    </table>

    <p> Muchas gracias, por su pedido.</p>
    <input type="submit" name="orden" value="Nuevo Cliente" onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
</form>