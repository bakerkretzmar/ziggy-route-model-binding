<?php

namespace App\Http\Controllers;

use App\BrainModel;

class BrainController
{
    public function __invoke(BrainModel $Brain)
    {
        return;
    }
}