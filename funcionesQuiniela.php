<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function imprimirPartidos($arrayEquipos){
        $equipo1=$arrayEquipos[rand(0,count($arrayEquipos))];
        $equipo2=$arrayEquipos[rand(0,count($arrayEquipos))];
        echo "<td>";
        echo $equipo1." vs ". $equipo2;
        echo "</td>";
    }
    ?>
</body>
</html>