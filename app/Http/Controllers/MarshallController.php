<?php

namespace App\Http\Controllers;

use App\MarshallModel;

class MarshallController
{
    public function __invoke(MarshallModel $Marshall)
    {
        return;
    }
}