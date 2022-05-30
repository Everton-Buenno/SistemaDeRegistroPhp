<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registre-se</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>


    <body>
        <div class="d-flex justify-content-center align-items-center vh-100">

            <div class="shadow w-450 p-3 text-center">
                <h3 class="display-4 ">Bem-vindo!, <?= $_SESSION['name'] ?></h3>
                <a href="logout.php" class="btn btn-warning">Logout</a>
            </div>
        </div>
    </body>

    </html>

<?php } else {
    header("Location: login.php");
    exit;
} ?>