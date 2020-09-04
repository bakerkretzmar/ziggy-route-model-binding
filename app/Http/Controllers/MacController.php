<?php

namespace App\Http\Controllers;

use App\MacModel;

class MacController
{
    public function __invoke(MacModel $Mac)
    {
        return;
    }
}