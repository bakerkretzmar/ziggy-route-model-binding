<?php

namespace App\Http\Controllers;

use App\ToyModel;

class ToyController
{
    public function __invoke(ToyModel $Toy)
    {
        return;
    }
}