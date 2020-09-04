<?php

namespace App\Http\Controllers;

use App\JohnnyModel;

class JohnnyController
{
    public function __invoke(JohnnyModel $Johnny)
    {
        return;
    }
}