<?php

require __DIR__ . '/autoload.php';

$news = new \App\Models\Article();

if (isset($_GET['id'])) {
    $news = $news::findOneById($_GET['id']);
    include __DIR__ . '/templete/article.php';
}