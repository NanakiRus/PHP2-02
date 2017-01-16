<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['id'])) {
    $news = new \App\Models\Article();
    $news->id = $_POST['id'];
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];
    $news->save();
}
header('Location: /obychenie/Php2-02/index.php');
die;