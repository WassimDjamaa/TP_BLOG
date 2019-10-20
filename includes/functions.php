<?php

function get_all_posts()
{
    global $db;
    $sth = $db->query("SELECT * FROM posts");
    return $sth->fetchAll();
}

function ajouter_articles($nom, $contenu)
{
    global $db;
    $sth = $db->prepare("INSERT INTO posts (title,content) VALUES (:title,:content)");
    $sth->bindParam(':title', $nom);
    $sth->bindParam(':content', $contenu);
    $sth->execute();
}

function afficher_article($id)
{
    global $db;
    $sth = $db->prepare("SELECT * FROM posts WHERE id = :id");
    $sth->bindParam(':id', $id);
    $sth->execute();
    return $sth->fetch();
}

function update_article($nom, $contenu, $id)
{
    global $db;
    $sth = $db->prepare('UPDATE posts SET title = :title,content = :content WHERE id = :id');
    $sth->bindParam(':id', $id);
    $sth->bindParam(':title', $nom);
    $sth->bindParam(':content', $contenu);
    $sth->execute(array($nom, $contenu, $id));
}
