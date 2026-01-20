

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
                        <?php
                        if ($_SESSION["isLogedIn"] === true) {
                            echo '<a href="submit.php"><i class="fa-solid fa-circle-plus"></i></a> ';
                            echo '<form action="" method="post">';
                            echo '<span class="image" style="width: 30px; height: 30px;">
                        <img src="http://rosanaregia.com.br/menu/1aa_imagens/caio.jpg" />
                    </span>';
                            echo '<p class="navbar-item">' . $_SESSION['usuario'] . '</p>';
                            echo '<input name="btnLogout" id="btnLogout" type="submit" value="Logout" class="button is-light">';
                            echo '</form>';
                            if (isset($_POST["btnLogout"])) {
                                logout();
                            }
                        } else {
                            echo '<a id="modalCadastrar" class="button is-primary" onclick="abrirFecharModal()">
                            <strong>Cadastrar</strong>
                        </a>
                        <a class="button is-light" href="login.php">
                            Login
                        </a>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </nav>
