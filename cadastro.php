<?php
function cadastrarUsuario(){

    session_start();

    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["senha"] = $_POST["senha"];
    $_SESSION["email"] = $_POST["email"];

    $_SESSION["isLogedIn"] = true;
}

if(isset($_POST["btnCadastrar"])){
    cadastrarUsuario();
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <form action="" method="post">

        <main>
            <div class="box">
                <h1 class="title">Cadastrar nova conta</h1>
                <div class="field">
                    <label class="label">Digite o seu usuário:</label>
                    <div class="control has-icons-left has-icons-right">
                        <input oninput="validarUsuario()" class="input is-danger" type="text" placeholder="Digite o seu usuario" name="usuario" id="usuario">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle" id="iconeUsuario"></i>
                        </span>
                    </div>
                    <p class="help is-danger" id="msgUsuario"></p>
                </div>

                <div class="field">
                    <label class="label">Digite o seu Email:</label>
                    <div class="control has-icons-left has-icons-right">
                        <input oninput="validarEmail()" class="input is-danger" type="email" placeholder="Digite o seu email" name="email" id="email">
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
                    <label class="label">Digite a sua senha:</label>
                    <div class="control has-icons-left has-icons-right">
                        <input oninput="validarSenha()" class="input is-danger" type="password" placeholder="Digite a sua senha" name="senha" id="senha">
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
                <input name="btnCadastrar" id="btnCadastrar" type="submit" value="Cadastrar" class="button is-dark" onclick="return validarFormCadastro()">
                </div>
        </main>
    </form>
</body>
</html>