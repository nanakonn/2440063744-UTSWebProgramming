<?php

namespace App\Http\Controllers;

use App\Models\publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index (){
        $publishers = publishers ::all();
        return view('Publisher', compact('publishers'));
    }
}
