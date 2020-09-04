<?php

namespace App\Http\Controllers;

use App\ArnoldModel;

class ArnoldController
{
    public function __invoke(ArnoldModel $Arnold)
    {
        return;
    }
}