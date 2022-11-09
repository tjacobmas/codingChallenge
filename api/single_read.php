<?php
    include_once 'header.php';

    $user = new User($db);

    $user->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $user->getSingleUser();

    if($user->name != null){
        // create array
        $emp_arr = array(
            "id" =>  $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "age" => $user->age,
            "designation" => $user->designation,
            "created" => $user->created
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("User not found.");
    }
?>