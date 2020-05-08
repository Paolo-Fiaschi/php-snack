<?php 
    header('Content-Type: application/json');   
    require_once "db.php"; 
    $res = [];


 
    foreach ($class as $student) {
        
        $res[] = $student["name"] . " " . $student["lastname"];
    }
    echo json_encode($res);
?>