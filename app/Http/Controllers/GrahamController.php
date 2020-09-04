<?php

namespace App\Http\Controllers;

use App\GrahamModel;

class GrahamController
{
    public function __invoke(GrahamModel $Graham)
    {
        return;
    }
}