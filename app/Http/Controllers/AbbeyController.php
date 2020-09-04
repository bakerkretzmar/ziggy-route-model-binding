<?php

namespace App\Http\Controllers;

use App\AbbeyModel;

class AbbeyController
{
    public function __invoke(AbbeyModel $Abbey)
    {
        return;
    }
}