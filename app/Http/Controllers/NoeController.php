<?php

namespace App\Http\Controllers;

use App\NoeModel;

class NoeController
{
    public function __invoke(NoeModel $Noe)
    {
        return;
    }
}