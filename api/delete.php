<?php
    include_once 'header.php';
    
    $user = new User($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    $user->id = $data->id;
    
    if($user->deleteUser()){
        echo json_encode("User deleted.");
    } else{
        echo json_encode("Data could not be deleted");
    }
?>