<?php

namespace App\Http\Controllers;

use App\QueenModel;

class QueenController
{
    public function __invoke(QueenModel $Queen)
    {
        return;
    }
}