<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\Article();
if (!empty($_POST)) {
    $news->id = $_POST['id'];
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];
    $news->save();
}
header('Location: /obychenie/Php2-02/index.php');
die;