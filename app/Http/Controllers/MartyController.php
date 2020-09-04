<?php

namespace App\Http\Controllers;

use App\MartyModel;

class MartyController
{
    public function __invoke(MartyModel $Marty)
    {
        return;
    }
}