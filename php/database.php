<?php

function  gPDO()
{
    if($newBD === null);

            $json_data = file_get_contents("http://localhost:8080/Annuaire_NWS/Annuaire_NWS/js/configDatabase.json");
            $data = json_decode($json_data);
            $newBD = new PDO("mysql:host=".$data->server.";dbname=".$data->database,$data->user,$data->password);
            return $newBD;
}
            
      
