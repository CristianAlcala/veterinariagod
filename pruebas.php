<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas Select</title>
    <link rel="stylesheet" href="">
</head>
<body style="text-align: center;">
    <div id="mascotas">

    <select name="doc" id="doc">
        <?php
        include "conexion.php";
        
        $consulta = 'SELECT MATRICULA, ESPECIALIDAD, NOMBRE from veterinario';
        $consultar = mysqli_query($conn, $consulta);
        
        while($row = mysqli_fetch_array($consultar))
        {
            $mat= $row['MATRICULA'];
            $esp=$row['ESPECIALIDAD'];
            $nom=$row['NOMBRE'];
        ?>  
        <option value="<?php echo $mat; ?>"><?php echo $nom." - ".$esp; ?></option>  
            <?php           
        }
        ?>
    </select>
    

    </div>
    
</body>
</html>