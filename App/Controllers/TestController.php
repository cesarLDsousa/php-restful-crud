<?php 

declare(strict_types=1);

namespace App\Controllers;

use App\Core\BaseController;

class TestController Extends BaseController
{
    public function index()
    {
        $model = $this->model('Test');
        $data = $model->all();
        echo json_encode($data);
    }
}