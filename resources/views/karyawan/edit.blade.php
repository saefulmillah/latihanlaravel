@extends('template')
@section('form-title', 'Form Input')
@section('content')

  @include('validation_error')
  {{ Form::model($employee, ['url' => 'karyawan/'.$employee->nik, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @include('karyawan.form')
  {{ Form::close()}}
@endsection
