<?php

namespace App\Http\Controllers;

use App\FredModel;

class FredController
{
    public function __invoke(FredModel $Fred)
    {
        return;
    }
}