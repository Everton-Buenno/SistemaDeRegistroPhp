<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">


        <form class="shadow w-450 p-3" action="App/signup.php" method="post">
            <h3 class="display-5 text-center mb-4">Crie Sua Conta</h3>

            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="name" value="<?php echo (isset($_GET['name'])) ? $_GET['name'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">User name</label>
                <input type="text" class="form-control" name="uName" value="<?php echo (isset($_GET['uName'])) ? $_GET['uName'] : "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input name="pass" type="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="login.php" class="link-alert-secondary ">Login</a>
        </form>
    </div>
</body>

</html>