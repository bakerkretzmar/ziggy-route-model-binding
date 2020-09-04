<?php

namespace App\Http\Controllers;

use App\MyaModel;

class MyaController
{
    public function __invoke(MyaModel $Mya)
    {
        return;
    }
}