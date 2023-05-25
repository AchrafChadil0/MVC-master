<?php
abstract class model {
   

    public function connectDb(){
        $db = new PDO('mysql:host=localhost;dbname=mvc1', 'root', '');
        return $db;
    }


    public function toJsonFile($array){
        $JsonData = json_encode($array);
        $flag =  file_put_contents('data.json', $JsonData);
        if ($flag !== false) {
            return true;
        }
        else {
            return false;
        }

    }


    
    



}





?>