<?php

namespace App\Http\Controllers;

use App\PercyModel;

class PercyController
{
    public function __invoke(PercyModel $Percy)
    {
        return;
    }
}