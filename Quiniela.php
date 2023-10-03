<HTML>
<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
    <style>
       
    </style>
</HEAD>
<BODY>
   
<?php


//28 equipos

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

$arraypartidos=array();


while (count($arrayequipos)>0) {

    shuffle($arrayequipos);

    //usamos el while para llevar un control sobre las 
    
    $equipo1=array_shift($arrayequipos);//cogemos el primer elemento y lo eliminamos;
    shuffle($arrayequipos);
    

    $equipo2=array_shift($arrayequipos);
    shuffle($arrayequipos);

    $arraypartidos[]=$equipo1 .'-' . $equipo2;
    
}



foreach ($arraypartidos as $key => $value) {
  echo $value;
  echo "<br>";
}

//vamos a crear las apuestas, para ellos vamos a crear un array con las 3 posibilidades

$apuestas=array("1", "2", "x");
$arrayapuesta = array();


    for ($i=1; $i <= (8*14); $i++) { 
    
        $arrayapuesta[$i-1] = $apuestas[rand(0,2)];
    }

    $arrayapuesta_partida = array_chunk($arrayapuesta, 8); // lo convertimos en tabla

//print_r($arrayapuesta);
for ($x=0; $x <=13 ; $x++) {
    for ($y=0; $y <=7 ; $y++) { 
        echo $arrayapuesta_partida[$x][$y]." ";
    }
    echo "</br>";
}

print_r($arrayapuesta_partida);