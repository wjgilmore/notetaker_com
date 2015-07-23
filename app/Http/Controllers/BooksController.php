<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Book;
use App\Http\Requests\CreateNotebookRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    	$books = Book::all();
        return view('books.index')->with('books', $books);
    }

    public function show($id) {

    	$book = Book::findOrFail($id);
        return view('books.show')->with('book', $book);    	
    }

    public function create() {
        return view('books.create');    	    	
    }

    public function store(CreateNotebookRequest $request) {

    	$book = new Book;

    	$book->name = $request->get('name');
    	$book->author = $request->get('author');
    	$book->save();

	    return \Redirect::route('books.show', 
	    	array($book->id))->with('message', 'Your notebook has been created!');
	
    }

}
