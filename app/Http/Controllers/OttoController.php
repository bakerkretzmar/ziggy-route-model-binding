<?php

namespace App\Http\Controllers;

use App\OttoModel;

class OttoController
{
    public function __invoke(OttoModel $Otto)
    {
        return;
    }
}