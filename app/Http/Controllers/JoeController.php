<?php

namespace App\Http\Controllers;

use App\JoeModel;

class JoeController
{
    public function __invoke(JoeModel $Joe)
    {
        return;
    }
}