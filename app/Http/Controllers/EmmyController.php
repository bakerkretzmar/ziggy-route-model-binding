<?php

namespace App\Http\Controllers;

use App\EmmyModel;

class EmmyController
{
    public function __invoke(EmmyModel $Emmy)
    {
        return;
    }
}