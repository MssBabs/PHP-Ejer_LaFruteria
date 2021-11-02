<form name="apuestaMiniCasino" method="POST">
    <table>
        <?php
            if(isset($_SESSION["resu"])){
                $resu=$_SESSION["resu"];
                echo "<tr> $resu </tr> "; 
            }
        ?>
    </table>

    <p>Dispone de <?= $_SESSION["dineroDisponible"] ?> para jugar</p>

    <p>
        Cantidad a Apostar:
        <input type="number" min="1" max="<?= $_SESSION["dineroDisponible"] ?>" name="dineroApuesta">
    </p>

    <p>
        Tipo de Apuesta:
        <input type="radio" name="apuesta" value="PAR">PAR
        <input type="radio" name="apuesta" value="IMPAR">IMPAR
    </p>

    <p>
        <input type="submit" name="orden" value="Apostar Cantidad">
        <input type="submit" name="orden" value="Abandonar MiniCasino">
    </p>
</form>