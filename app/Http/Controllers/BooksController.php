<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\publishers;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index (){
        $book = books::all();
        return view('Home', compact('book'));
    }

    public function details ($id){
        $detail = books::all()->where('id',$id);
        $publishers = publishers::all();
        return view('Detail', compact('detail', 'publishers'));
    }




}
