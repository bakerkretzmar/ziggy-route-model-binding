<?php

namespace App\Http\Controllers;

use App\CaesarModel;

class CaesarController
{
    public function __invoke(CaesarModel $Caesar)
    {
        return;
    }
}