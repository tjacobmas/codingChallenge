<?php
    include_once 'header.php';

    $user = new User($db);
    $stmt = $user->getUsers();
    $userCount = $stmt->rowCount();

    if($userCount > 0){
        $userArr = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "age" => $age,
                "designation" => $designation,
                "created" => $created
            );

            array_push($userArr, $e);
        } 
        echo json_encode($userArr);
    }
    else{
        http_response_code(404);
        echo json_encode(['status' => 'failed', 'message' => 'No record found.']);
    }
?>