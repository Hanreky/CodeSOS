<?php
include 'conexao.php';

function cadastrarUsuario()
{
    session_start();
    global $conn;
    conectar();

    $senhaHash = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO TBUSUARIO(USUARIO, SENHA, EMAIL)
    VALUES (?, ?, ?)";

    $psmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($psmt, "sss", $_POST["usuario"], $senhaHash, $_POST["email"]);

    mysqli_stmt_execute($psmt);

    $_SESSION["usuario"] = $_POST["usuario"];
    $psmt = null;

    realizarLogin();

    desconectar();

}
function realizarLogin()
{
    session_start();
    global $conn;
    conectar();

    $email = $_POST['email'];

    $sql = "SELECT * FROM TBUSUARIO 
    WHERE EMAIL = ? ";

    $psmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($psmt, "s", $email);

    mysqli_stmt_execute($psmt);

    $resultado = mysqli_stmt_get_result($psmt);

    if (mysqli_num_rows($resultado) == 1) {

        $usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($_POST['senha'], $usuario['SENHA'])) {
            $_SESSION['idusuario'] = $usuario['IDUSUARIO'];
            $_SESSION['usuario'] = $usuario['USUARIO'];

            $_SESSION["isLogedIn"] = true;

            header('Location: index.php');
            exit;
        } else {
            echo "<script>alert('Senha incorreta.');</script>";

        }
    } else {
        echo "<script>alert('Usuário não encontrado.');</script>";
    }

}
?>