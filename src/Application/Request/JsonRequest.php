<?php 

namespace Wagner\Pi\Application\Request;

class JsonRequest {
   

    public static function JSON(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $json = file_get_contents("php://input");
        
            $data = json_decode($json, true);
        
            if ($data !== null) {
                return $data;
            }

            return [];
        }
    }
}