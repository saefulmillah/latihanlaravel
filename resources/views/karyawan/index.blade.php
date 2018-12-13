@extends('template')
@section('title', 'Form Input')
@section('content')
@include('alert')
{{ Form::open([ 'url' => 'karyawan', 'method' => 'GET', 'class' => '' ]) }}
  <div class="form-body">
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Pencarian :</label>
      <div class="col-md-10">
        {{ Form::text('nama', null,[ 'class' => 'form-control', 'placeholder' => 'Enter Keywords' ]) }}
      </div>
    </div>
  </div>
{{ Form::close() }}
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nik</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Department</th>
      <th>Gaji</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($employee as $emp)
      <tr>
        <td>{{ $emp->nik }}</td>
        <td>{{ $emp->nama }}</td>
        <td>{{ $emp->jabatan }}</td>
        <td>{{ $emp->department }}</td>
        <td>{{ $emp->gaji }}</td>
        <td>{{ link_to('/karyawan/'.$emp->nik.'/edit', 'Edit', ['class' => 'btn btn-warning']) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ link_to('karyawan/create', 'Tambah Data', ['class' => 'btn btn-info']) }}
@endsection
