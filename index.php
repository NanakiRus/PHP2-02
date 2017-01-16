<?php

require __DIR__ . '/autoload.php';

$author = new \App\Models\Author();

$author->id = 6;
$author->firstname = 'ПАВПff';
$author->lastname = 'вап';
$author->save();

$config = new \App\Config();
echo $config->data['db']['host'];

