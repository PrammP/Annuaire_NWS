<?php

$file = '../js/configDatabase.json';
$json_data = file_get_contents($file);
$data = json_decode($json_data);
$newBD = new PDO("mysql:host=".$data->host.";dbname=".$data->database,$data->user,$data->password);



            
      
