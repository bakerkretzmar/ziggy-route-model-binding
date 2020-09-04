<?php

namespace App\Http\Controllers;

use App\PrincessModel;

class PrincessController
{
    public function __invoke(PrincessModel $Princess)
    {
        return;
    }
}