<?php

    require 'Materia.php';
    require 'db.php';
    require 'header.php';
    require 'footer.php';
echo "<br><br><br><font size='5' color='#black'><br><br><center><b>MATERIAS ASIGNADAS</b></font></center><br>";
    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
        $materia = $_REQUEST['materia'];
        $maestro = $_REQUEST['maestro'];

        if($materia != 0){
            $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

    }

    //Creamos un objeto
    $materia = new Materia();

    $materia->seleccionaMaestro();

?>