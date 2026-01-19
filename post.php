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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>

<!-- and it's easy to individually load additional languages -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/languages/go.min.js"></script>

<script>hljs.highlightAll();</script>
</head>
<body>
    <?php 
    include 'conPergunta.php';

    $pergunta = carregarPergunta();

  echo '  <p><a href="post.php"><span class="title">'. $pergunta['TITULO'] .'</span></a> <br>
                            <small>por</small> <strong>José Educado</strong> <small>@josee</small> <small>31m</small>
                            <br />

                            '. $pergunta['CONTEUDO'] .'
                            <br>
                        </p>
                        '
    ?>
</body>
</html>