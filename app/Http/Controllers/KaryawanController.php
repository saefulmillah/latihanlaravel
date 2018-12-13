<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use DB;

class KaryawanController extends Controller
{
  function index()
  {
    // contoh join
    $elq = Employee::join('departments', 'departments.id','=','employees.department_id')
                    ->select('employees.nik','employees.nama','departments.department')
                    ->get();

    $qb = DB::table('employees')
            ->join('departments', 'departments.id','=','employees.department_id')
            ->select('employees.nik','employees.nama','departments.department', 'employees.jabatan', 'employees.gaji')
            ->get();

    // return $qb;
    // select * from employee
    $data['employee'] = $qb;
    return view('karyawan.index', $data);
  }

  function create()
  {
    // pluck --> digunakan untuk menampilkan dropdown yang diambil dari satu table
    // kalau ingin ngambil dropdown dari hasil join harus menggunakan native foreach
    // Department::pluck('parameter_yang_akan_ditampilkan', 'parameter_yang_akan_digunakan_sebagai_value')
    $data['department'] = Department::pluck('department', 'id');
    return view('karyawan.create', $data);
  }

  function store(Request $request)
  {
    $validatedData = $request->validate([
        'nik' => 'required',
        'nama' => 'required',
    ]);

    /* Membuat object baru dai model employee */
    // $parameter = new Nama_model
    // $employee adalah instance dari class Employee (model)
    $employee = new Employee;
    //
    $employee->nik  = $request->nik;
    $employee->nama = $request->nama;
    $employee->department_id  = $request->department_id;
    $employee->jabatan_id  = 1;
    $employee->jumlah_anak  = 1;
    $employee->jabatan = $request->jabatan;
    $employee->email  = "saeful.millah0607@gmail.com";
    $employee->alamat = $request->alamat;
    $employee->foto = "foto.png";
    $employee->gaji = $request->gaji;

    if ($employee->save()) {
        return redirect('karyawan')->with('status', 'Berhasil di save');
    } else {
        return redirect('karyawan')->with('status', 'gagal di save');
    }
  }

  function update($nik, Request $request)
  {
    // $request->validate([
    //     'nik' => 'required',
    //     'nama' => 'required',
    // ]);

    /* Membuat object baru dai model employee */
    // $parameter = new Nama_model
    // $employee adalah instance dari class Employee (model)
    $employee = Employee::find($nik);
    //
    $employee->nik  = $request->nik;
    $employee->nama = $request->nama;
    $employee->department_id  = $request->department_id;
    $employee->jabatan_id  = 1;
    $employee->jumlah_anak  = 1;
    $employee->jabatan = $request->jabatan;
    $employee->email  = "saeful.millah0607@gmail.com";
    $employee->alamat = $request->alamat;
    $employee->foto = "foto.png";
    $employee->gaji = $request->gaji;

    if ($employee->update()) {
        return redirect('karyawan')->with('status', 'Berhasil di update');
    } else {
        return redirect('karyawan')->with('status', 'gagal di update');
    }
  }

  function edit($nik)
  {
    // $employee adalah instance dari class Employee (model)
    $data['department'] = Department::pluck('department', 'id');
    $data['employee'] = Employee::find($nik);
    return view('karyawan.edit', $data);
  }
}
