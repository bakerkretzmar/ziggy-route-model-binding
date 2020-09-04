<?php

namespace App\Http\Controllers;

use App\ValentineModel;

class ValentineController
{
    public function __invoke(ValentineModel $Valentine)
    {
        return;
    }
}