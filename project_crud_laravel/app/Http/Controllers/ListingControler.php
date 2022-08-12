<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingControler extends Controller
{
    public function listing(){
        return view(view:'layouts/listing');
    }
}
