<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class BooksController extends Controller
{
    public function index(){

      $books =  Book::orderBy('Name', "asc")->paginate(10);
      //return view('books.index');
      return view('books.index')->with('books',$books);
    //  return 123;
    }

    public function create(){

    }

    public function store(){

    }

    public function show($id){
      
      $book = Book::find($id);

      return view('books.show')->with('book', $book);
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }


}
