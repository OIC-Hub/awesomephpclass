<?php
require_once "database.php";
$login_Errors = [];
$name = $email = $nameErr = $emailErr = "";
if (isset($_POST['register'])) {
    if (empty($_POST['name'])) {
        $nameErr = "Your name is required";
    } elseif (!is_string(trim($_POST['name']))) {
        $nameErr = "Please enter a valid name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['email'])) {
        $emailErr = "Your Email is required";
    } else {
        $email = $_POST['email'];
    }

    if (!empty($name) && !empty($email)) {
        //
        $sql = "INSERT INTO registration(name, email) VALUES('$name', '$email')";
        if (mysqli_query($db, $sql)) {
            echo "Success";
        }
    }
}

if (isset($_POST['login'])) {
    if (empty($_POST['email'])) {
        $login_Errors['emailErr'] = "Your Email is required";
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['password'])) {
        $login_Errors['passwordErr'] = "Your password is required";
    } else {
        $password = md5($_POST['password']);
    }

    if (!$login_Errors) {
        $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $select = mysqli_query($db, $sql);
        if (mysqli_num_rows($select) > 0) {
            $result = mysqli_fetch_array($select);
            echo $result['name'];
            echo  $result['email'];
        } else {
            $login_Errors['userErr'] = "Invalid details";
        }
    }
    print_r($login_Errors);
}


$select = mysqli_query($db, "SELECT * FROM registration");
$users = [];
while ($result = mysqli_fetch_assoc($select)) {
    // $users[array_keys($result)] = array_values($result);
    $users[] = $result;
}
print_r($users);
