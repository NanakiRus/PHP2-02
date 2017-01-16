<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\Article();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $news->id = $_POST['id'];
}

if (isset($_POST['title']) && $_POST['title'] !== '' && isset($_POST['text']) && $_POST['text'] !== '') {
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];
    $news->save();
}

header('Location: /obychenie/Php2-02/index.php');
die;