<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['postBtn'])) {
        $_SESSION["a"] = $_POST['myTextarea'];
        header('Location: a.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'components/links.html' ?>

    <script src="https://cdn.tiny.cloud/1/od09yjidi3pbrf7sxafj8xq4v2pux3ts43ggei52ll765uus/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
    selector: 'textarea',
    height: 400,
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'code', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Feb 3, 2026:
      'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | code codesample | blocks fontfamily fontsize | bold italic underline strikethrough | link media | spellcheckdialog a11ycheck typography uploadcare | align | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ]
  });
    </script>


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
                <textarea id="myTextarea" name="myTextarea"></textarea>
                <br>
                <br>
                <input name="postBtn" id="postBtn" type="submit" value="Postar" class="button is-dark">
            </form>

        </div>
    </div>

</body>

</html>