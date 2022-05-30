<?php


if (
    isset($_POST['name']) &&
    isset($_POST['uName']) &&
    isset($_POST['pass'])
) {
    include "../App/BD.php";
    $name = $_POST['name'];
    $uName = $_POST['uName'];
    $pass = $_POST['pass'];

    $data = "&name=" . $name . "&uName=" . $uName;

    if (empty($name)) {
        $em = "Nome completo é obrigatorio!";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($uName)) {
        $em = "Nome de Usuario é obrigratorio!";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "Senha é obrigatorio!";
        header("Location: ../index.php?error=$em&$data");
        exit;
    } else {


        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (name, username, password)
                VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $uName, $pass]);

        header("Location: ../index.php?success=Sua conta foi criada com sucesso");
        exit;
    }
} else {
    header("Location: ../index.php?error=error");
    exit;
}
