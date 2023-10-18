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
session_start();
//Cargamos la funcion. Ya que queremos que los partidos se carguen independientemente de si se pulsa o no sumbimt
if($_SERVER['REQUEST_METHOD']!="POST"){
    include './FuncionesQuiniela.php';
    $Partidos=CrearPartidos();
    $_SESSION['partidos']=$Partidos;
}

$Partidos=$_SESSION['partidos'];

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
            <?php echo $Partidos[0];?>
        </td>
        <td name="ap0">
    
            <input type="radio" name="opcion0-0" value="1">1
    
            <input type="radio" name="opcion0-0" value="x">x
    
            <input type="radio" name="opcion0-0" value="2">2
        </td>
    
        <td name="ap1">
    
            <input type="radio" name="opcion1-0" value="1">1
    
            <input type="radio" name="opcion1-0" value="x">x
    
            <input type="radio" name="opcion1-0" value="2">2
        </td>
    
        <td name="ap2">
    
            <input type="radio" name="opcion2-0" value="1">1
    
            <input type="radio" name="opcion2-0" value="x">x
    
            <input type="radio" name="opcion2-0" value="2">2
        </td>
    
        <td name="ap3">
    
            <input type="radio" name="opcion3-0" value="1">1
    
            <input type="radio" name="opcion3-0" value="x">x
    
            <input type="radio" name="opcion3-0" value="2">2
        </td>
    
        <td name="ap4">
    
            <input type="radio" name="opcion4-0" value="1">1
    
            <input type="radio" name="opcion4-0" value="x">x
    
            <input type="radio" name="opcion4-0" value="2">2
        </td>
    
        <td name="ap5">
    
            <input type="radio" name="opcion5-0" value="1">1
    
            <input type="radio" name="opcion5-0" value="x">x
    
            <input type="radio" name="opcion5-0" value="2">2
        </td>
    
        <td name="ap6">
    
            <input type="radio" name="opcion6-0" value="1">1
    
            <input type="radio" name="opcion6-0" value="x">x
    
            <input type="radio" name="opcion6-0" value="2">2
        </td>
    
        <td name="ap7">
    
            <input type="radio" name="opcion7-0" value="1">1
    
            <input type="radio" name="opcion7-0" value="x">x
    
            <input type="radio" name="opcion7-0" value="2">2
        </td>
    </tr>
    <tr>
    
        <!-- columna 0 fila 1-->
        <td>
            <?php echo $Partidos[1];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-1" value="1">1
    
            <input type="radio" name="opcion0-1" value="x">x
    
            <input type="radio" name="opcion0-1" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-1" value="1">1
    
            <input type="radio" name="opcion1-1" value="x">x
    
            <input type="radio" name="opcion1-1" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-1" value="1">1
    
            <input type="radio" name="opcion2-1" value="x">x
    
            <input type="radio" name="opcion2-1" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-1" value="1">1
    
            <input type="radio" name="opcion3-1" value="x">x
    
            <input type="radio" name="opcion3-1" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-1" value="1">1
    
            <input type="radio" name="opcion4-1" value="x">x
    
            <input type="radio" name="opcion4-1" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-1" value="1">1
    
            <input type="radio" name="opcion5-1" value="x">x
    
            <input type="radio" name="opcion5-1" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-1" value="1">1
    
            <input type="radio" name="opcion6-1" value="x">x
    
            <input type="radio" name="opcion6-1" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-1" value="1">1
    
            <input type="radio" name="opcion7-1" value="x">x
    
            <input type="radio" name="opcion7-1" value="2">2
        </td>
    </tr>
    <!-- columna  fila 2-->
    <tr>
        <td>
            <?php echo $Partidos[2];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-2" value="1">1
    
            <input type="radio" name="opcion0-2" value="x">x
    
            <input type="radio" name="opcion0-2" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-2" value="1">1
    
            <input type="radio" name="opcion1-2" value="x">x
    
            <input type="radio" name="opcion1-2" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-2" value="1">1
    
            <input type="radio" name="opcion2-2" value="x">x
    
            <input type="radio" name="opcion2-2" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-2" value="1">1
    
            <input type="radio" name="opcion3-2" value="x">x
    
            <input type="radio" name="opcion3-2" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-2" value="1">1
    
            <input type="radio" name="opcion4-2" value="x">x
    
            <input type="radio" name="opcion4-2" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-2" value="1">1
    
            <input type="radio" name="opcion5-2" value="x">x
    
            <input type="radio" name="opcion5-2" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-2" value="1">1
    
            <input type="radio" name="opcion6-2" value="x">x
    
            <input type="radio" name="opcion6-2" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-2" value="1">1
    
            <input type="radio" name="opcion7-2" value="x">x
    
            <input type="radio" name="opcion7-2" value="2">2
        </td>
    </tr>
    <!-- columna  fila 3-->
    <tr>
        <td>
            <?php echo $Partidos[3];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-3" value="1">1
    
            <input type="radio" name="opcion0-3" value="x">x
    
            <input type="radio" name="opcion0-3" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-3" value="1">1
    
            <input type="radio" name="opcion1-3" value="x">x
    
            <input type="radio" name="opcion1-3" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-3" value="1">1
    
            <input type="radio" name="opcion2-3" value="x">x
    
            <input type="radio" name="opcion2-3" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-3" value="1">1
    
            <input type="radio" name="opcion3-3" value="x">x
    
            <input type="radio" name="opcion3-3" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-3" value="1">1
    
            <input type="radio" name="opcion4-3" value="x">x
    
            <input type="radio" name="opcion4-3" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-3" value="1">1
    
            <input type="radio" name="opcion5-3" value="x">x
    
            <input type="radio" name="opcion5-3" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-3" value="1">1
    
            <input type="radio" name="opcion6-3" value="x">x
    
            <input type="radio" name="opcion6-3" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-3" value="1">1
    
            <input type="radio" name="opcion7-3" value="x">x
    
            <input type="radio" name="opcion7-3" value="2">2
        </td>
    </tr>
    <!-- columna  fila 4-->
    <tr>
        <td>
            <?php echo $Partidos[4];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-4" value="1">1
    
            <input type="radio" name="opcion0-4" value="x">x
    
            <input type="radio" name="opcion0-4" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-4" value="1">1
    
            <input type="radio" name="opcion1-4" value="x">x
    
            <input type="radio" name="opcion1-4" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-4" value="1">1
    
            <input type="radio" name="opcion2-4" value="x">x
    
            <input type="radio" name="opcion2-4" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-4" value="1">1
    
            <input type="radio" name="opcion3-4" value="x">x
    
            <input type="radio" name="opcion3-4" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-4" value="1">1
    
            <input type="radio" name="opcion4-4" value="x">x
    
            <input type="radio" name="opcion4-4" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-4" value="1">1
    
            <input type="radio" name="opcion5-4" value="x">x
    
            <input type="radio" name="opcion5-4" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-4" value="1">1
    
            <input type="radio" name="opcion6-4" value="x">x
    
            <input type="radio" name="opcion6-4" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-4" value="1">1
    
            <input type="radio" name="opcion7-4" value="x">x
    
            <input type="radio" name="opcion7-4" value="2">2
        </td>
    </tr>
    <!-- columna  fila 5-->
    <tr>
        <td>
            <?php echo $Partidos[5];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-5" value="1">1
    
            <input type="radio" name="opcion0-5" value="x">x
    
            <input type="radio" name="opcion0-5" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-5" value="1">1
    
            <input type="radio" name="opcion1-5" value="x">x
    
            <input type="radio" name="opcion1-5" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-5" value="1">1
    
            <input type="radio" name="opcion2-5" value="x">x
    
            <input type="radio" name="opcion2-5" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-5" value="1">1
    
            <input type="radio" name="opcion3-5" value="x">x
    
            <input type="radio" name="opcion3-5" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-5" value="1">1
    
            <input type="radio" name="opcion4-5" value="x">x
    
            <input type="radio" name="opcion4-5" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-5" value="1">1
    
            <input type="radio" name="opcion5-5" value="x">x
    
            <input type="radio" name="opcion5-5" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-5" value="1">1
    
            <input type="radio" name="opcion6-5" value="x">x
    
            <input type="radio" name="opcion6-5" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-5" value="1">1
    
            <input type="radio" name="opcion7-5" value="x">x
    
            <input type="radio" name="opcion7-5" value="2">2
        </td>
    </tr>
    <!-- columna  fila 6-->
    <tr>
        <td>
            <?php echo $Partidos[6];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-6" value="1">1
    
            <input type="radio" name="opcion0-6" value="x">x
    
            <input type="radio" name="opcion0-6" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-6" value="1">1
    
            <input type="radio" name="opcion1-6" value="x">x
    
            <input type="radio" name="opcion1-6" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-6" value="1">1
    
            <input type="radio" name="opcion2-6" value="x">x
    
            <input type="radio" name="opcion2-6" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-6" value="1">1
    
            <input type="radio" name="opcion3-6" value="x">x
    
            <input type="radio" name="opcion3-6" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-6" value="1">1
    
            <input type="radio" name="opcion4-6" value="x">x
    
            <input type="radio" name="opcion4-6" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-6" value="1">1
    
            <input type="radio" name="opcion5-6" value="x">x
    
            <input type="radio" name="opcion5-6" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-6" value="1">1
    
            <input type="radio" name="opcion6-6" value="x">x
    
            <input type="radio" name="opcion6-6" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-6" value="1">1
    
            <input type="radio" name="opcion7-6" value="x">x
    
            <input type="radio" name="opcion7-6" value="2">2
        </td>
    </tr>
    <!-- columna  fila 7 y ultima-->
    <tr>
        <td>
            <?php echo $Partidos[7];?>
        </td>
        <td name="ap8">
    
            <input type="radio" name="opcion0-7" value="1">1
    
            <input type="radio" name="opcion0-7" value="x">x
    
            <input type="radio" name="opcion0-7" value="2">2
        </td>
    
        <td name="ap9">
    
            <input type="radio" name="opcion1-7" value="1">1
    
            <input type="radio" name="opcion1-7" value="x">x
    
            <input type="radio" name="opcion1-7" value="2">2
        </td>
    
        <td name="ap10">
    
            <input type="radio" name="opcion2-7" value="1">1
    
            <input type="radio" name="opcion2-7" value="x">x
    
            <input type="radio" name="opcion2-7" value="2">2
        </td>
    
        <td name="ap11">
    
            <input type="radio" name="opcion3-7" value="1">1
    
            <input type="radio" name="opcion3-7" value="x">x
    
            <input type="radio" name="opcion3-7" value="2">2
        </td>
    
        <td name="ap12">
    
            <input type="radio" name="opcion4-7" value="1">1
    
            <input type="radio" name="opcion4-7" value="x">x
    
            <input type="radio" name="opcion4-7" value="2">2
        </td>
    
        <td name="ap13">
    
            <input type="radio" name="opcion5-7" value="1">1
    
            <input type="radio" name="opcion5-7" value="x">x
    
            <input type="radio" name="opcion5-7" value="2">2
        </td>
    
        <td name="ap14">
    
            <input type="radio" name="opcion6-7" value="1">1
    
            <input type="radio" name="opcion6-7" value="x">x
    
            <input type="radio" name="opcion6-7" value="2">2
        </td>
    
        <td name="ap15">
    
            <input type="radio" name="opcion7-7" value="1">1
    
            <input type="radio" name="opcion7-7" value="x">x
    
            <input type="radio" name="opcion7-7" value="2">2
        </td>
    </tr>
       </table>
       <button type="submit">enviar</button>
   </form>


<?php 

//comprobamos la condicion para saber si el usuario ha pulsado el boton submit.
if($_SERVER['REQUEST_METHOD']=="POST"){


//crearemos un array bidimensional en el que guardar los datos recogidos por el formulario.`p
$apuestas=array(array());
//for que cambia los indices i y j, para que podamos recorrer la nomenclatura elegida en el html. (OPCION COLUMNA-FILA siendo columna j y filas i)
for ($j=0; $j <= 7; $j++) { 
   for ($i=0; $i < 8 ; $i++) { 

        if(isset($_REQUEST['opcion' . $i . '-' . $j])){
            $apuestas[$j][$i] = $_REQUEST['opcion' . $i . '-' . $j];
        }else {
            $apuestas[$j][$i] = "-";

        } 
    }
}


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

$partidosphp=$_SESSION['partidos'];

for ($x=0; $x <=7 ; $x++) {

    echo "<tr>";
    echo "<td>" . $partidosphp[$x] . "</td>";

    for ($y=0; $y < 8 ; $y++) { 
            //cambiamos de orden los indices para poder tener las columnas 
        echo "<td>" . $apuestas[$x][$y] . "</td>";
        
    }

    echo "</tr>";
}

echo "</table>";
}
?>