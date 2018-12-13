@extends('template')
@section('title', 'list book')
@section('content')

      @foreach($book as $books)
        <b>{{ strtoupper($books['isbn']) }}</b> - <i>{{ strtoupper($books['judul']) }}</i><br>
      @endforeach
      
@endsection
