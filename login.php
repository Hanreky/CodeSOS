<?php
include 'conUsuario.php';

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

    <link href="estilo.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-6.5.2-web/css/all.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css">
    <link rel="stylesheet" href="https://bulma.io/assets/css/website.min.css?v=202506271628">
</head>

<body>

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation" id="barraPrincipal">

        <div class="navbar-brand">

            <a class="navbar-item" href="index.php">
                <i class="fa-solid fa-code"></i><i class="fa-solid fa-handshake-angle"></i>
                <p>CodeSOS</p>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="index.html">
                    Sobre
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Mais
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="produto1.html">
                            Produto 1
                        </a>
                        <a class="navbar-item" href="produto2.html">
                            Produto 2
                        </a>
                        <a class="navbar-item is-selected" href="produto3.html">
                            Produto 3
                        </a>

                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">

                    <div class="buttons">
                        <a class="button is-primary" href="index.php" onclick="abrirFecharModal()">
                            <strong>Cadastrar</strong>
                        </a>
                        <a class="button is-light is-active" href="login.php">
                            Login
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </nav>

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

            <script src="script.js"></script>
            <input name="btnLogin" id="btnLogin" type="submit" value="Entrar"
             class="button is-dark" onclick="return validarFormLogin()">
            </div>
        </main>
    </form>

</body>

</html>