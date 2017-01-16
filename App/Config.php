<?php

namespace App;


class Config
{
    private $data;
    private static $instance = null;

    private function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

    protected function __clone()
    {

    }

    static public function getInstance() {
        if(is_null(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

}