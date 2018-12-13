<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    // index
    function index()
    {
      $book = [
        ['isbn'=>'BD0331', 'judul' => 'Seminggu jago codeigniter'],
        ['isbn'=>'BD0332', 'judul' => 'Seminggu jago laravel'],
      ];

      // pemanggilan data
      $data['book'] = $book;
      return view('book', $data);
      // mengambil lebih dari 1 parameter
      // return view('book', compact($books, $student));
    }

    function create()
    {
      return view('form');
    }

    function bookAuthor()
    {
      $author = [
        ['name'=>'John Doe', 'judul' => 'Seminggu jago codeigniter'],
      ];

      // pemanggilan data
      $data['author'] = $author;
      return view('book', $data);
      // mengambil lebih dari 1 parameter
      // return view('book', compact($books, $student));
    }
}
