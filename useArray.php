<?php
$errors = [];
if (isset($_POST['register'])) {
    if (empty($_POST['name'])) {
        $errors['nameErr'] = "Your name is required";
    } elseif (!is_string(trim($_POST['name']))) {
        $errors['nameErr'] = "Invalid name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['email'])) {
        $errors['emailErr'] = "Your email is required";
    } else {
        $email = $_POST['email'];
    }
    if (!$errors) {
        ///
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> PHP Form </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1> Users</h1>


                <form action="useArray.php" method="post">
                    <div class="form-group">
                        <label for="">Full NAme</label>
                        <input type="text" value="" name="name" class="form-control" placeholder="Full Name" aria-describedby="helpId">
                        <small id="helpId" class="text-danger"></small>
                    </div>
                    <div class="<?php echo "form-group" ?> >
                        <label for="">Email</label>
                        <input type=" email" value="" name="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                        <small id="helpId" class="text-danger"><?php
                                                                if (array_key_exists('nameErr', $errors)) {
                                                                    echo  $errors['nameErr'];
                                                                }
                                                                ?>

                        </small>
                    </div>
                    <button type="submit" name="register">Register</button>
            </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>