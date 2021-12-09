<?php

namespace App\Manager;

class BaseManager
{
    protected  $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

}