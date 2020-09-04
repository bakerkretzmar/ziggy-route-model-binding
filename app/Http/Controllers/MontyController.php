<?php

namespace App\Http\Controllers;

use App\MontyModel;

class MontyController
{
    public function __invoke(MontyModel $Monty)
    {
        return;
    }
}