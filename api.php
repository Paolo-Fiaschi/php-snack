<?php 
    header('Content-Type: application/json');   
    require_once "db.php"; 
    $res = [];
    
    foreach ($class as $student) {
        
        $res[] = [
            "name" => $student["name"] . " " . $student["lastname"],
            "scores" => $student["scores"]
        ];
    }
    echo json_encode($res);


?>