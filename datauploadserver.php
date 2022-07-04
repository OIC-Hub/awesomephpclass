<?php
require_once "database.php";
$response = [];
// $req = json_decode(file_get_contents('php://input'), true);

// if (empty(trim($req['username']))) {
//     $response['nameErr'] = "Your name is required";
// } else {
//     $name = $req['username'];
// }
// if (empty(trim($req['email']))) {
//     $response['emailErr'] = "Your email is required";
// } else {
//     $email = $req['email'];
// }
// if (empty(trim($req['image']))) {
//     $response['imageErr'] = "Image is required";
// } else {
//     $req['email']['name'];
// }
// if (!$response) {
//     $password = "sunday";
//     $stm = $db->prepare("INSERT INTO registration(name, email, password) VALUES(?,?,?)");
//     $stm->bind_param('sss', $name, $email, $password);
//     if ($stm->execute()) {
//         $response['success'] = "The data has successfully uploaded";
//     } else {
//         $response['failure'] = "Something went wrong " . $stm->error;
//     }
// }

if (empty(trim($_POST['name']))) {
    $response['nameErr'] = "Your name is required";
} else {
    $name = $_POST['username'];
}
if (empty(trim($_POST['email']))) {
    $response['emailErr'] = "Your email is required";
} else {
    $email = $_POST['email'];
}
$name = basename($_FILES['image']['name']);
$size = $_FILES['image']['size'];
$temp_name = $_FILES['image']['tmp_name'];
$response['fileName'] = $name;
$response['fileSize'] = $size;
$response['filetemp_name'] = $temp_name;
$path = "/document/$name";
$response['filetpath'] = $path;
$extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
$response['fileexten'] = $extension;

if (move_uploaded_file($temp_name, $path)) {
    $response['success'] = "File Uploaded successfully";
} else {
    $response['error'] = "Unable to upload";
}
echo json_encode($response);
