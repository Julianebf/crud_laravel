<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControler extends Controller
{
    public function main(){
        return view(view:'layouts/index');
    }
}
