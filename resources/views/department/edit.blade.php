@extends('template')
@section('form-title', 'Form Input')
@section('content')

  @include('validation_error')
  {{-- Form::model($department) <-- menyesuaikan dengan passing parameter $data --}}
  {{ Form::model($department, ['url' => 'department/'.$department->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @include('department.form')
  {{ Form::close()}}
@endsection
