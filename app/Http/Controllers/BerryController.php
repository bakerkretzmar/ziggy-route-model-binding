<?php

namespace App\Http\Controllers;

use App\BerryModel;

class BerryController
{
    public function __invoke(BerryModel $Berry)
    {
        return;
    }
}