<?php

namespace App\Http\Controllers;

use App\LucyModel;

class LucyController
{
    public function __invoke(LucyModel $Lucy)
    {
        return;
    }
}