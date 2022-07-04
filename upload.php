<!doctype html>
<html lang="en">

<head>
    <title>Data upload with files</title>
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
                <h1> User Registration</h1>
                <form name="reg">
                    <div class="form-group">
                        <label for="">Full NAme</label>
                        <input type="text" value="" name="name" class="form-control" placeholder="Full Name" aria-describedby="helpId">
                        <small id="helpId" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type=" email" value="" name="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                        <small id="helpId" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="">Your picture</label>
                        <input type="file" value="" id="image" name="image" class="form-control">
                        <small id="helpId" class="text-danger"></small>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        var reg = document.forms['reg'];
        reg.onsubmit = function(event) {
            event.preventDefault();

            let data = new FormData(reg);
            // let name = reg['name'].value;
            // let email = reg['email'].value;
            // let image = document.querySelectorAll('#image')[0].files;
            // // const data = {
            //     username: name,
            //     email: email,
            //     image: image
            // }
            axios.post('datauploadserver.php', data).then(response => {
                console.log(response.data);
                if (response.data.emailErr) {
                    alert(response.data.emailErr);
                }
            }).catch(error => {
                console.log(error)
            })

        }
    </script>
</body>

</html>