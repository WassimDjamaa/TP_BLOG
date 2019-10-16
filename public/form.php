<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Ajouter un article</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Nom de l'article :</label>
                <input name="title" type="text" class="form-control" placeholder="Entrer un titre">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Son contenu :</label>
                <textarea name="content" class="form-control" placeholder="Entrer votre article"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>

        </form>
    </div>
</body>

</html>