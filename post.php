<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'components/links.html' ?>

</head>

<body>
    <?php
    include 'controller/conPergunta.php';

    $pergunta = carregarPergunta();

    echo '  <p><a href="post.php"><span class="title">' . $pergunta['TITULO'] . '</span></a> <br>
                            <small>por</small> <strong>José Educado</strong> <small>@josee</small> <small>31m</small>
                            <br />

                            ' . $pergunta['CONTEUDO'] . '
                            <br>
                        </p>
                        '
        ?>
</body>

</html>