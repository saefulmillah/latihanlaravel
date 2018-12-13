@extends('template')
@section('title', 'Form Input')
@section('content')
@include('alert')
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Department</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($department as $row)
      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->department }}</td>
        <td>{{ link_to('/department/'.$row->id.'/edit', 'Edit', ['class' => 'btn blue']) }}</td>
        <td>
          {{ Form::open(['url' => 'department/'.$row->id, 'method' => 'delete']) }}
          {{ Form::submit('Delete', ['class' => 'btn red']) }}
          {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $department->links() }} <br>
{{ link_to('department/create', 'Tambah Data', ['class' => 'btn yellow']) }}
@endsection
