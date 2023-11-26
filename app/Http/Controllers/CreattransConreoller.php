<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreattransConreoller extends Controller
{
    public function creat()
    {
        return view('dash.tfctc');
    }
}
