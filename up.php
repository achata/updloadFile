<?php 
        $carpeta = "files/";
        opendir($carpeta);
        $destino = $carpeta.$_FILES['archivo']['name'];
        copy($_FILES['archivo']['tmp_name'],$destino);
        echo "Archivo subido correctamente";
        //$n = $_FILES['archivo']['name'];
        //echo "<img src='files/$n'>";
?>