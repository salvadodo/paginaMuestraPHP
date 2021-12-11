<?php
    require "cadConPaginaMuestra.php";
    $query="sp_selectalldueñosInnercasas";
    $datosBD=mysqli_query($con, $query);
    while($fila=mysqli_fetch_array($datosBD, MYSQL_BOTH)){
        echo "<div>".$fila["tipodeCasa"]."</div>" . "<div>".$fila["Ubicacion"]."</div>" . "<div>".$fila["Descripcion"]."</div>" .
        "<div>".$fila["Dueño"]."</div>" . "<div>".$fila["Nombre"]."</div>" .
        "<div>".$fila["Edad"]."</div>" . "<div>".$fila["Direccion"]."</div>";
    }
    mysqli_close($con);
?>