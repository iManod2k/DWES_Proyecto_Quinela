<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function main(){
            $arrayequipos=array("Real Madrid",
        "FC Barcelona",
        "Atlético de Madrid",
        "Valencia CF",
        "Sevilla FC",
        "Real Betis",
        "Villarreal CF",
        "Real Sociedad",
        "Athletic Club",
        "Getafe CF",
        "Celta de Vigo",
        "Levante UD",
        "Espanyol",
        "Deportivo Alavés",
        "Real Valladolid",
        "Granada CF",
        "SD Eibar",
        "Mallorca",
        "Osasuna",
        "Elche CF",
        "CD Leganés",
        "Rayo Vallecano",
        "Huesca",
        "Cádiz CF",
        "RCD Mallorca",
        "Real Zaragoza",
        "RC Deportivo",
        "zaragoza FC"
    );
    echo imprimirPartidos($arrayequipos);
    }

    function imprimirPartidos($arrayEquipos){
        $equipo2=$arrayEquipos[rand(0,count($arrayEquipos))];
        $arrayPartidos=array();
        for ($i=0; $i < count($arrayEquipos); $i++) { 
            $equipo1=$arrayEquipos[rand(0,count($arrayEquipos))];
            $equipo2=$arrayEquipos[rand(0,count($arrayEquipos))];
            $arrayPartidos=$equipo1. " vs ". $equipo2. "<br>";
            unset($arrayEquipos[array_search($equipo1, $arrayEquipos)]);
            unset($arrayEquipos[array_search($equipo1, $arrayEquipos)]);
        }
        return $arrayPartidos;

    }
    ?>
</body>
</html>