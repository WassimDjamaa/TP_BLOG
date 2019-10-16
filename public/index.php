<?php
require_once '../includes/config.php';




if (isset($_POST['title']) && isset($_POST['content'])) {
    $nom = $_POST['title'];
    $contenu = $_POST['content'];
    ajouter_articles($nom, $contenu);
}

$posts = get_all_posts();

if (isset($_POST['id'])) {
    afficher_article($id);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog actualité</title>
    <link rel="stylesheet" href="../includes/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Blog</h1>
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-4">
                    <h2><?= $post['title']; ?></h2>
                    <p><?= $post['content']; ?></p>
                    <a href="affichage.php"><button>Lire la suite</button></a>
                </div>
            <?php endforeach; ?>
        </div><br />
        <a href="form.php"><button>Ajouter un article</button></a>
    </div>

</body>

</html>