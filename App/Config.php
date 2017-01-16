<?php

namespace App;


class Config
{
    public $data;

    private function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

}