<?php
    include_once 'header.php';

    $user = new User($db);

    $data = json_decode(file_get_contents("php://input"));

    $user->name = $data->name;
    $user->email = $data->email;
    $user->age = $data->age;
    $user->designation = $data->designation;
    $user->created = date('Y-m-d H:i:s');
    
    if($user->createUser()){
        echo json_encode(['status' => 'success', 'message' => 'User created successfully.']);
    } else{
        echo json_encode(['status' => 'failed', 'message' => 'User could not be created.']);
    }
?>