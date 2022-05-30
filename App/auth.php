<?php
session_start();

if (

    isset($_POST['uName']) &&
    isset($_POST['pass'])
) {
    include "./BD.php";



    $uName = $_POST['uName'];
    $pass = $_POST['pass'];

    $data = "uName=" . $uName;

    if (empty($uName)) {
        $em = "Nome de Usuario é obrigratorio!";
        header("Location: login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Senha é obrigatorio!";
        header("Location: login.php?error=$em&$data");
        exit;
    } else {




        $sql = "SELECT * FROM usuarios WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uName]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            $username = $user['username'];
            $password = $user['password'];
            $name = $user['name'];
            $id = $user['id'];

            if ($username === $uName) {
                if (password_verify($pass, $password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['name'] = $name;

                    header("Location: home.php");
                    exit;
                } else {
                    $em = "Usuario ou Senha Incorretos!";
                    header("Location: login.php?error=$em&$data");
                    exit;
                }
            } else {
                $em = "Usuario ou Senha Incorretos!";
                header("Location: login.php?error=$em&$data");
                exit;
            }
        } else {
            $em = "Usuario ou Senha Incorretos!";
            header("Location: login.php?error=$em&$data");
            exit;
        }
    }
} else {
    header("Location: login.php?error=error");
    exit;
}
