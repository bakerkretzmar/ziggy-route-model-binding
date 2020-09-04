<?php

namespace App\Http\Controllers;

use App\MartinModel;

class MartinController
{
    public function __invoke(MartinModel $Martin)
    {
        return;
    }
}