<?php

namespace App\Http\Controllers;

use App\MortonModel;

class MortonController
{
    public function __invoke(MortonModel $Morton)
    {
        return;
    }
}