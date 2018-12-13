@extends('template')
@section('form-title', 'Form Input')
@section('content')

  @include('validation_error')
  {{ Form::open(['url' => 'karyawan', 'class' => 'form-horizontal']) }}
    @include('karyawan.form')
  {{ Form::close()}}
@endsection
