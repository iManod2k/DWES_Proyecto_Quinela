<HTML>
<HEAD>
    <TITLE> EJ1-Conversion IP Decimal a Binario </TITLE>
    <style>
       table, td{
        border: 1px solid black;
        border-collapse:collapse;
        padding:1em;
       }
    </style>
</HEAD>
<BODY>
   
<?php


//28 equipos

$arrayequipos=array("Real Madrid","FC Barcelona","Atlético de Madrid","Valencia CF","Sevilla FC","Real Betis","Villarreal CF","Real Sociedad","Athletic Club","Getafe CF","Celta de Vigo","Levante UD","Espanyol","Deportivo Alavés","Real Valladolid","Granada CF","SD Eibar","Mallorca","Osasuna","Elche CF", "CD Leganés","Rayo Vallecano","Huesca","Cádiz CF","RCD Mallorca","Real Zaragoza","RC Deportivo","zaragoza FC");


$arraypartidos=array();


while (count($arrayequipos)>0) {

    shuffle($arrayequipos);

    //usamos el while para llevar un control sobre el numero de elementos que quedan 
    
    $equipo1=array_shift($arrayequipos);//cogemos el primer elemento y lo eliminamos;
    shuffle($arrayequipos);
    

    $equipo2=array_shift($arrayequipos);
    shuffle($arrayequipos);

    $arraypartidos[]=$equipo1 .'-' . $equipo2;
    
}


//vamos a crear las apuestas, para ellos vamos a crear un array con las 3 posibilidades

$apuestas=array("1", "2", "x");
$arrayapuesta = array();


for ($i=1; $i <= (8*14); $i++) { 
    
    $arrayapuesta[$i-1] = $apuestas[rand(0,2)];//creamos las apuestas para cada partido en un unico array
}

$arrayapuesta_partida = array_chunk($arrayapuesta, 8); // cogemos el array anterior, y lo convertimos. Vamos a coger cada 8 posiciones, guardarlas todas en un array. 
//creamos asi un array bidimensional. Por cada fila (1,2,3...) guardamos las apuestas que a su vez estan en un array.


//print_r($arrayapuesta);



//imprimimos con tabla
echo "<table>";

for ($x=0; $x <=13 ; $x++) {
    echo "<tr>";
    echo "<td>" . $arraypartidos[$x] . "</td>";
    for ($y=0; $y <=7 ; $y++) { 

        echo "<td>" .$arrayapuesta_partida[$x][$y] . "</td>";
        
    }
    echo "</tr>";
}
echo "</table>";