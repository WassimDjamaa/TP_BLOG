<?php
require_once '../includes/config.php';
if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sth = $db->prepare("UPDATE table 
                         SET title = :title AND content = :content
                         WHERE id = :id");
    $sth->bindParam(':id', $id);
    $sth->bindParam(':title', $title);
    $sth->bindParam(':content', $content);
    $sth->execute();
}
