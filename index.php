<?php

date_default_timezone_set("America/Bogota");

include 'config.php';

if (isset($_POST['from'])) 
{

    if ($_POST['from']!="" AND $_POST['to']!="") 
    {

        $Datein                    = date('d/m/Y H:i:s', strtotime($_POST['from']));
        $Datefi                    = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $inicio = _formatear($Datein);

        $final  = _formatear($Datefi);

        $orderDate                      = date('d/m/Y H:i:s', strtotime($_POST['from']));
        $inicio_normal = $orderDate;

        $orderDate2                      = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $final_normal  = $orderDate2;

        $titulo = evaluar($_POST['title']);

        $body   = evaluar($_POST['event']);

        $clase  = evaluar($_POST['class']);

        $query="INSERT INTO agenda VALUES(null,'$titulo','$body','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        $conexion->query($query)or die('<script type="text/javascript">alert("Horario No Disponible ")</script>');

        header("Location:$base_url");        


        $im=$conexion->query("SELECT MAX(id) AS id FROM agenda");
        $row = $im->fetch_row();  
        $id = trim($row[0]);

        $link = "$base_url"."descripcion_evento.php?id=$id";

        $query="UPDATE agenda SET url = '$link' WHERE id = $id";

        $conexion->query($query); 

    }
}

?>

