<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login UTS</title>
    <link rel="stylesheet" type="text/css" href="uts_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h4>LOGIN</h4>
            <p>Masukkan Username dan Password</p>
            <form action="konfig_log.php" method="POST">
            <input class="form-control" type="text" name="username" id="" placeholder="Masukkan Username" aria-label="default input example"> <br>
            <input class="form-control" type="password" name="password" id="" placeholder="Password" aria-label="default input example"> <br>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <p>Lupa Password? Klik Disini</p>
            </form>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>