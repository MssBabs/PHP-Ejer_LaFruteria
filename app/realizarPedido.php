<form name="realizarPedido" method="POST">
    <h3> Realize su Compra <?= $_SESSION["Usuario"] ?></h3>

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

    <p>
        Seleccione la fruta:
        <select name="opFruta">
            <option value="Naranjas">Naranjas</option>
            <option value="Limones">Limones</option>
            <option value="Platanos">Plátanos</option>
            <option value="Manzanas">Manzanas</option>
        </select>
        Cantidad: <input type="number" name="numFruta" min="1">

        <input type="submit" name="orden" value="Anotar">
        <input type="submit" name="orden" value="Terminar">
    </p>
</form>