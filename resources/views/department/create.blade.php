@extends('template')
@section('form-title', 'Form Input')
@section('content')

  @include('validation_error')
  {{ Form::open(['url' => 'department', 'class' => 'form-horizontal']) }}
    @include('department.form')
  {{ Form::close()}}
@endsection
