<?php

namespace App\Http\Controllers;

use App\SammyModel;

class SammyController
{
    public function __invoke(SammyModel $Sammy)
    {
        return;
    }
}