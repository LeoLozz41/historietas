<?php

    session_start();
    session_destroy();
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://shiranaisaito.000webhostapp.com/Adaptativo/conexionpublicaciones/css/estilo.css">
    <title>Historietas</title>
</head>
<body>
    
    <center>
        <tr>Indice de Historietas</tr>
        <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Editorial</th>
                        <th>Personaje</th>
                        <th>Genero</th>
                        <th>Autor</th>
                        <th>Año</th>
                        <th>País</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
        
    
    <!--------------TITULOS------------------------------------------->
        <tbody>
            <?php
                include ("open.php");
                $consulta = "SELECT * FROM publicaciones";
                $resultado = $conexion->query($consulta);
                while($row = $resultado->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['editorial']; ?> </td>
                    <td><?php echo $row['personaje']; ?> </td>
                    <td><?php echo $row['genero']; ?> </td>
                    <td><?php echo $row['autor']; ?> </td>
                    <td><?php echo $row['anio']; ?> </td>
                    <td><?php echo $row['pais']; ?> </td>
                    <td> <img width="50px" src="data:image/jpg;base64, <?php echo base64_encode ($row['Imagen']);?>">  </td>
                </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
    </center>
</body>
</html>