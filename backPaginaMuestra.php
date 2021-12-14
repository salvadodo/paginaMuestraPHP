<?php
    require "cadConPaginaMuestra.php";
    mysqli_set_charset($con, "utf8");
    $query="CALL sp_selectalldueñosInnercasas()";
    // $query="select * from dueños inner join casas on idDueño=Dueño";
    // $query="select * from casas";
    $datosBD=mysqli_query($con, $query);
    while($fila=mysqli_fetch_array($datosBD, MYSQLI_BOTH)){
            echo "<div>".$fila["tipodeCasa"]."</div>" . "<div>".$fila["Ubicacion"]."</div>".
            "<div>".$fila["Descripcion"]."</div>" . "<div>".$fila["Dueño"]."</div>".
            "<div>".$fila["Nombre"]."</div>" . "<div>".$fila["Edad"]."</div>" . "<div>".$fila["Direccion"]."</div>";    
    }
    mysqli_close($con);
?>