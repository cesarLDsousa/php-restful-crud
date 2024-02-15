<?php

namespace App\Core;

class BaseController 
{
    public function model($model)
    {
        require_once "../App/Models/".$model.".php";
        
        return new $model();
    }
}