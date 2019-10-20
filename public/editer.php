<?php
require_once '../includes/config.php';

$post = afficher_article($_POST['id']);

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['id'])) {
    $maj = update_article($nom, $contenu, $id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Modifier un article</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Nom de l'article :</label>
                <input name="title" type="text" class="form-control" placeholder="Entrer un titre" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Son contenu :</label>
                <input name="content" class="form-control" placeholder="Entrer votre article" value="<?php echo $post['content']; ?>" />
            </div>


            <form action="index.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $maj['title'] ?>" />
                <input type="submit" value="Mettre à jour" />
            </form>

        </form>
    </div>
</body>

</html>