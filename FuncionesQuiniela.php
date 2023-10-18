<?php 
   
   
    

    function CrearPartidos(){

        $arrayequipos=array("Real Madrid","FC Barcelona","Atlético de Madrid","Valencia CF","Sevilla FC","Real Betis","Villarreal CF","Real Sociedad","Athletic Club","Getafe CF","Celta de Vigo","Levante UD","Espanyol","Deportivo Alavés","Real Valladolid","Granada CF","SD Eibar","Mallorca","Osasuna","Elche CF","CD Leganés","Rayo Vallecano","Huesca","Cádiz CF","RCD Mallorca","Real Zaragoza","RC Deportivo","Zaragoza FC");
        
        
        while (count($arrayequipos)>0) {

            // $equipo1=$arrayEquipos[rand(0,count($arrayEquipos))];
            // $equipo2=$arrayEquipos[rand(0,count($arrayEquipos))];
            // $arrayPartidos[$i]=$equipo1. " vs ". $equipo2. "<br>";
            // unset($arrayEquipos[array_search($equipo1, $arrayEquipos)]);
            // unset($arrayEquipos[array_search($equipo1, $arrayEquipos)]);
            
            shuffle($arrayequipos);

            //usamos el while para llevar un control sobre el numero de elementos que quedan 
        
            $equipo1=array_shift($arrayequipos);//cogemos el primer elemento y lo eliminamos;
            shuffle($arrayequipos);
        

            $equipo2=array_shift($arrayequipos);
            shuffle($arrayequipos);

            $arraypartidos[]=$equipo1 .' VS ' . $equipo2;

        }

        return $arraypartidos;

        }
        


?>
