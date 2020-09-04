<?php

namespace App\Http\Controllers;

use App\ThomasModel;

class ThomasController
{
    public function __invoke(ThomasModel $Thomas)
    {
        return;
    }
}