<?php

namespace App\Http\Controllers;

use App\AngelModel;

class AngelController
{
    public function __invoke(AngelModel $Angel)
    {
        return;
    }
}