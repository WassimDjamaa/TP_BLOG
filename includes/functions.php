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
    $req = $db->query("SELECT*FROM posts WHERE $id = :id");
    $req->bindParam(':id', $id);
    $req->execute();
    return $req->fetchAll();
}
