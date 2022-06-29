<?php
require_once "database.php";
$response = [];
$req = json_decode(file_get_contents('php://input'), true);

if (empty(trim($req['username']))) {
    $response['nameErr'] = "Your name is required";
} else {
    $name = $req['username'];
}
if (empty(trim($req['email']))) {
    $response['emailErr'] = "Your email is required";
} else {
    $email = $req['email'];
}
if (!$response) {
    $password = "sunday";
    $stm = $db->prepare("INSERT INTO registration(name, email, password) VALUES(?,?,?)");
    $stm->bind_param('sss', $name, $email, $password);
    if ($stm->execute()) {
        $response['success'] = "The data has successfully uploaded";
    } else {
        $response['failure'] = "Something went wrong " . $stm->error;
    }
}
echo json_encode($response);
