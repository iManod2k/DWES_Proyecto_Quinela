<HTML>
<HEAD>
    <TITLE>Quiniela</TITLE>
    <style>
       table, td{
        border: 1px solid black;
        border-collapse:collapse;
        padding:1em;
       }
    </style>
</HEAD>

<?php

//28 equipos

$arrayequipos=array("Real Madrid","FC Barcelona","Atlético de Madrid","Valencia CF","Sevilla FC","Real Betis","Villarreal CF","Real Sociedad","Athletic Club","Getafe CF","Celta de Vigo","Levante UD","Espanyol","Deportivo Alavés","Real Valladolid","Granada CF","SD Eibar","Mallorca","Osasuna","Elche CF","CD Leganés","Rayo Vallecano","Huesca","Cádiz CF","RCD Mallorca","Real Zaragoza","RC Deportivo","zaragoza FC");

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

$apuestas=array(array());

for ($i=1; $i <= 1; $i++) { 
   for ($j=1; $j <= 8 ; $j++) { 

    $apuestas[] = $_REQUEST['opcion' . $j . '-' . $i];

   } 
}
print_r($apuestas);


//cambio la estructura de control que había previamente. 

// for ($i=0; $i <= 13; $i++) { 
//     for ($j=0; $j <= 7; $j++) { 

//         $arrayapuesta[$i][$j] = $apuestas[rand(0,2)];
//         //creamos las apuestas para cada partido en un unico array
//     }
    
	
// }

//$arrayapuesta_partida = array_chunk($arrayapuesta, 8); 
// cogemos el array anterior, y lo convertimos. Vamos a coger cada 8 posiciones, guardarlas todas en un array. 
//creamos asi un array bidimensional. Por cada fila (1,2,3...) guardamos las apuestas que a su vez estan en un array.


//print_r($arrayapuesta);



//imprimimos con tabla
echo "<table>";



for ($x=1; $x <=1 ; $x++) {

    echo "<tr>";
    echo "<td>" . $arraypartidos[$x] . "</td>";

    for ($y=1; $y <=8 ; $y++) { 
            //cambiamos de orden los indices para poder tener las columnas 
        echo "<td>" . $apuestas[$y][$x] . "</td>";
        
    }

    echo "</tr>";
}

echo "</table>";

?>
<BODY>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <table>
        <thead>
            <th>PARTIDOS</th>
            <th>Apuesta 1</th>
            <th>Apuesta 2</th>
            <th>Apuesta 3</th>
            <th>Apuesta 4</th>
            <th>Apuesta 5</th>
            <th>Apuesta 6</th>
            <th>Apuesta 7</th>
            <th>Apuesta 8</th>
        </thead>
        <tr>
            <td>
                <?php echo $arraypartidos[1];?> 
            </td>
            <td name="ap1">
                
                <input type="radio" name="opcion1-1" value="1">1
                
                <input type="radio" name="opcion1-1" value="x">x
                
                <input type="radio" name="opcion1-1" value="2">2
            </td>
            <td name="ap2">
                
                <input type="radio" name="opcion2-1" value="1">1
               
                <input type="radio" name="opcion2-1" value="x">x
                
                <input type="radio" name="opcion2-1" value="2">2
            </td>
            <td name="ap3">
                
                <input type="radio" name="opcion3-1" value="1">1
               
                <input type="radio" name="opcion3-1" value="x">x
                
                <input type="radio" name="opcion3-1" value="2">2
            </td>
            <td name="ap4">
                
                <input type="radio" name="opcion4-1" value="1">1
               
                <input type="radio" name="opcion4-1" value="x">x
                
                <input type="radio" name="opcion4-1" value="2">2
            </td>
            <td name="ap5">
                
                <input type="radio" name="opcion5-1" value="1">1
               
                <input type="radio" name="opcion5-1" value="x">x
                
                <input type="radio" name="opcion5-1" value="2">2
            </td>
            <td name="ap6">
                
                <input type="radio" name="opcion6-1" value="1">1
               
                <input type="radio" name="opcion6-1" value="x">x
                
                <input type="radio" name="opcion6-1" value="2">2
            </td>
            <td name="ap7">
                
                <input type="radio" name="opcion7-1" value="1">1
               
                <input type="radio" name="opcion7-1" value="x">x
                
                <input type="radio" name="opcion7-1" value="2">2
            </td>
            <td name="ap8">
                
                <input type="radio" name="opcion8-1" value="1">1
               
                <input type="radio" name="opcion8-1" value="x">x
                
                <input type="radio" name="opcion8-1" value="2">2
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
       </table>
       <button type="submit">enviar</button>
   </form>