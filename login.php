<?php
include 'controller/conUsuario.php';

session_start();
if (isset($_POST['btnLogin'])) {
    realizarLogin();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <?php include 'components/links.html' ?>

</head>

<body>

    <?php include 'components/navbar.php' ?>

    <div class="columns is-gapless">

        <div class="column" id="coluna1">
            <aside class="menu">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li><a class="is-active">Para Você</a></li>
                    <li><a>Perguntas</a></li>
                </ul>
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li><a>Tags</a></li>
                    <li><a>Users</a></li>
                    <li><a>Companies</a></li>
                </ul>
            </aside>
        </div>

        <div class="column" id="coluna2">
            <form action="" method="post">

                <main class="box" style="margin-top: 100px;">
                    <div class="field">
                        <label class="label"><strong>Email:</strong></label>
                        <div class="control has-icons-left has-icons-right">
                            <input oninput="validarEmail()" class="input is-danger" type="email"
                                placeholder="Digite o seu email" name="email" id="email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle" id="iconeEmail"></i>
                            </span>
                        </div>
                        <p class="help is-danger" id="msgEmail"></p>
                    </div>

                    <div class="field">
                        <label class="label"><strong>Senha:</strong></label>
                        <div class="control has-icons-left has-icons-right">
                            <input oninput="validarSenha()" class="input is-danger" type="password"
                                placeholder="Digite a sua senha" name="senha" id="senha">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle" id="iconeSenha"></i>
                            </span>
                        </div>
                        <p class="help is-danger" id="msgSenha"></p>
                    </div>


                    <input name="btnLogin" id="btnLogin" type="submit" value="Entrar" class="button is-dark"
                        onclick="return validarFormLogin()">
        </div>
        </main>
        </form>
    </div>
    </div>




</body>

</html>