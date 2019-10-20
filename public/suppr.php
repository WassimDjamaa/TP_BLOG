<?php
require_once '../includes/config.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sth = $db->prepare("DELETE  FROM posts where id = :id");
    $sth->bindParam(':id', $id);
    $sth->execute();
}

header("Location: index.php");
