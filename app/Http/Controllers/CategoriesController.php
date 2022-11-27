<?php



namespace App\Http\Controllers;

use App\Models\book_categorys;
use App\Models\books;
use App\Models\publishers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // public function categories ($name){
    //     $categories = categories::all();
    //     $books = books::all();
    //     $book_categorys = book_categorys::all();
    //     $categories_con = categories::all()->where('name',$name);
    //     return view('Category', compact('categories', 'categories_con', 'books', 'book_categorys'));
    // }

    public function categories ($Category_id){
        $books = books::all();
        $book_categorys = book_categorys::all();
        $book_categorys_con = book_categorys::all()->where('Category_id', $Category_id);
        return view('Category', compact('books','book_categorys','book_categorys_con'));
    }
}
