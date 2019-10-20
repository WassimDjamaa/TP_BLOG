<?php
require_once '../includes/config.php';

$id = $_GET['id'];
$post = afficher_article($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog actualité</title>
    <link rel="stylesheet" href="../includes/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
    <h1><?php echo $post['title'] ?></h1>
    <p><?php echo $post['content'] ?></p>
</body>

</html>