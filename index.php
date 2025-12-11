<?php
session_start();
function cadastrarUsuario()
{
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["senha"] = $_POST["senha"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["isLogedIn"] = true;
}

if (isset($_POST["btnCadastrar"])) {
    cadastrarUsuario();
    header('Location: index.php');
    exit;
}

if (!isset($_SESSION["isLogedIn"])) {
    $_SESSION["isLogedIn"] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeSOS</title>

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

            <a class="navbar-item" href="index.html">
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
                        <?php
                        if ($_SESSION["isLogedIn"]) {
                            echo '<p class="navbar-item">' . $_SESSION["usuario"] . '</p>';
                            echo '<a class="button is-light" onclick="logout()">
                            Logout';
                            echo '</a>';
                        } else {
                            echo '<a class="button is-primary" onclick="abrirFecharModal()">
                            <strong>Cadastrar</strong>
                        </a>
                        <a class="button is-light">
                            Login
                        </a>';
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </nav>


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
            <p class="control has-icons-left" style="margin-bottom: 30px;">
                <input class="input" type="text" placeholder="Pesquisar" />
                <span class="icon is-left">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </span>
            </p>

            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="http://rosanaregia.com.br/menu/1aa_imagens/imagem_jose.jpg" />
                    </p>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-thumbs-up"></i></span> <span
                            style="margin-left: 3px;">5.6k</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-comment"></i></span> <span
                            style="margin-left: 3px;">332</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-eye"></i></span> <span
                            style="margin-left: 3px;">11.9k</span>
                    </a>
                    
                </figure>
                <div class="media-content">
                    <div class="content">

                        <p><a href="post1.html"><span class="title">Como usar o pointer</span></a> <br>
                            <small>por</small> <strong>José Educado</strong> <small>@josee</small> <small>31m</small>
                            <br />

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare
                            magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa
                            sem. Etiam finibus odio quis feugi...
                            <br>
                        </p>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                            <a href="">#c #pointers</a>


                        </div>
                    </nav>
                </div>
                <div class="media-right">
                    <button class="delete"></button>
                </div>
            </article>

            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="http://rosanaregia.com.br/menu/1aa_imagens/imagem_joao.jpg" />
                    </p>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-thumbs-up"></i></span> <span
                            style="margin-left: 3px;">112k</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-comment"></i></span> <span
                            style="margin-left: 3px;">1k</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-eye"></i></span> <span
                            style="margin-left: 3px;">500k</span>
                    </a>
                    
                </figure>
                <div class="media-content">
                    <div class="content">

                        <p><a href="post1.html"><span class="title">Como akendar a neka</span></a> <br>
                            <small>por</small> <strong>BlackHawk</strong> <small>@blackhawk</small> <small>31m</small>
                            <br />

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare
                            magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa
                            sem. Etiam finibus odio quis feugi...
                            <br>
                        </p>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                            <a href="">#python #encapsulacao</a>


                        </div>
                    </nav>
                </div>
                <div class="media-right">
                    <button class="delete"></button>
                </div>
            </article>

            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="http://rosanaregia.com.br/menu/1aa_imagens/dudu.png" />
                    </p>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-thumbs-up"></i></span> <span
                            style="margin-left: 3px;">4</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-comment"></i></span> <span
                            style="margin-left: 3px;">0</span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fa-solid fa-eye"></i></span> <span
                            style="margin-left: 3px;">100</span>
                    </a>
                    
                </figure>
                <div class="media-content">
                    <div class="content">

                        <p><a href="post1.html"><span class="title">Como declara a variáviel</span></a> <br>
                            <small>por</small> <strong>Dudu</strong> <small>@dudududus</small> <small>31m</small>
                            <br />

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare
                            magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa
                            sem. Etiam finibu...
                            <br>
                        </p>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                            <a href="">#java #poo</a>


                        </div>
                    </nav>
                </div>
                <div class="media-right">
                    <button class="delete"></button>
                </div>
            </article>

            <nav class="pagination" role="navigation" aria-label="pagination">
                <a class="pagination-previous is-disabled" title="This is the first page">Previous</a>
                <a href="#" class="pagination-next">Next page</a>
                <ul class="pagination-list">
                    <li>
                        <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
                    </li>
                    <li>
                        <a href="#" class="pagination-link" aria-label="Goto page 2">2</a>
                    </li>
                    <li>
                        <a href="#" class="pagination-link" aria-label="Goto page 3">3</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>


    <div class="modal" id="modal">
        <div class="modal-background"></div>
        <div class="modal-content">

            <form action="" method="post">

                <main>
                    <div class="box">
                        <h1 class="title">Cadastrar nova conta</h1>
                        <div class="field">
                            <label class="label">Digite o seu usuário:</label>
                            <div class="control has-icons-left has-icons-right">
                                <input oninput="validarUsuario()" class="input is-danger" type="text"
                                    placeholder="Digite o seu usuario" name="usuario" id="usuario">
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
                            <label class="label">Digite a sua senha:</label>
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
                        <input name="btnCadastrar" id="btnCadastrar" type="submit" value="Cadastrar"
                            class="button is-dark" onclick="return validarFormCadastro()">
                    </div>
                </main>
            </form>

        </div>
        <button class="modal-close is-large" aria-label="close" onclick="abrirFecharModal()"></button>
    </div>




    <script src="script.js"></script>
</body>

</html>