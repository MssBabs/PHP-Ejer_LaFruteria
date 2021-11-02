<form name="entradaMiniCasino" method="GET">
    <!-- method="GET" no requiere el botón 
        $xxx = $_GET['dineroDisponible'];-->
    <h3>BIENVENIDO AL MINICASINO</h3><br/>

    <!-- xx: Cookie guarda numVisitas/numJugadas -->
    <p>Esta es su <!-- xx -->ºVisita</p>

    <p>
        Introduzca el dinero con el que va jugar: 
        <input type="number" min="1" name="dineroDisponible">
    </p>

    <input type="submit" name="orden" value="Entrar">
</form>