<?php
session_start();
require "database.php";
// echo md5('sunday');
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM registration where email=? AND password=?";
    $statement = $db->prepare($sql);
    $statement->bind_param('ss', $email, $pass);
    $statement->execute();
    $select = $statement->get_result();
    if ($select->num_rows > 0) {
        $result = $select->fetch_assoc();
        $_SESSION['email'] = $result['email'];
        header('location:dashboard.php');
    } else {
        echo "Invalid details";
    }


    /*
    s - string
    i - integer
    d  - double
    b  - Blob
 
    */
}
