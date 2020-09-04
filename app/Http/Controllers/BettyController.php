<?php

namespace App\Http\Controllers;

use App\BettyModel;

class BettyController
{
    public function __invoke(BettyModel $Betty)
    {
        return;
    }
}