<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
