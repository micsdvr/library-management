<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data['books'] = Books::all();
      return view('books.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Return the create view with the Library object (optional)
    return view('books.create');
        $books = new Books();
        $books->title         = $request['Title'];
        $books->author         = $request['Author'];
        $books->description         = $request['Description'];
        $books->isbn         = $request['Isbn'];
        $books->year         = $request['Publish Year'];
        $books->save();
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = new Books();
        $books->title         = $request['Title'];
        $books->author         = $request['Author'];
        $books->description         = $request['Description'];
        $books->Isbn         = $request['Isbn'];
        $books->year         = $request['Publish Year'];
        $books->save();

     return redirect()->to('books');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // return Student::find($id);

       $books = Books::find($id);
       return $books->title;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['books'] = Books::all();
      return view('books.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Books::find($id);
        $books->title         = $request['Title'];
        $books->author         = $request['Author'];
        $books->description         = $request['Description'];
        $books->isbn         = $request['Isbn'];
        $books->year         = $request['Publish Year'];
        $books->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);
        $books ->delete();
        return redirect()->to('books');
    }
}


