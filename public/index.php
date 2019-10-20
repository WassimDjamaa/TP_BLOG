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

if (isset($_POST['id'])) {
    $id = $_POST['id'];
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
        <br />
        <div class="row">
            <?php foreach ($posts as $post) : ?>
                <div class="col-md-4">
                    <h2><?= $post['title']; ?></h2>
                    <p><?= $post['content']; ?></p>
                    <a href="http://localhost/iut-tp-blog-master/public/affichage.php?id=<?php echo $post['id'] ?>"><button>Lire la suite</button></a>

                    <form action="suppr.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $post['id'] ?>" />
                        <input type="submit" value="supprimer" />
                    </form>

                    <form action="editer.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $post['id'] ?>" />
                        <input type="submit" value="Editer" />
                    </form>
                </div>

            <?php endforeach; ?>
        </div><br />
        <a href="form.php"><button>Ajouter un article</button></a>
    </div>

</body>

</html>