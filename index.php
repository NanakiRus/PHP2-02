<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\Article::findAll();

$conf = \App\Config::getInstance();

var_dump($conf);

include __DIR__ . '/template/template.php';
