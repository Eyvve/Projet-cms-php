<?php

namespace App\Manager;

class BaseManager
{
    protected $pdo;

    /**
     * @return array
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

}