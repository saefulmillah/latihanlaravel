<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/create', 'KaryawanController@create');
Route::post('/karyawan', 'KaryawanController@store');
Route::get('/karyawan/{nik}/edit', 'KaryawanController@edit');
Route::put('/karyawan/{nik}', 'KaryawanController@update');
Route::get('/department', 'DepartmentController@index');
Route::get('/department/create', 'DepartmentController@create');
Route::post('/department', 'DepartmentController@store');
Route::get('/department/{id}/edit', 'DepartmentController@edit');
Route::put('/department/{id}', 'DepartmentController@update');
Route::delete('/department/{id}', 'DepartmentController@destroy');
// Route::get('/author', 'BooksController@bookAuthor');

// Route::get('/hello/{nama}', function ($nama)
// {
//   // $book = [
//   //   ['isbn'=>'BD0331', 'judul' => 'Seminggu jago codeigniter'],
//   //   ['isbn'=>'BD0332', 'judul' => 'Seminggu jago laravel'],
//   // ];
//   //
//   // // pemanggilan data
//   // $data['book'] = $book;
//   // return view('book', $data);
//   // // mengambil lebih dari 1 parameter
//   // // return view('book', compact($books, $student));
// });
