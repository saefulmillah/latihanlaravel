<div class="form-body">
  <div class="form-group">
    <label for="" class="col-md-3 control-label">NIK</label>
    <div class="col-md-9">
      {{ Form::text('nik', null, ['placeholder' => 'NIK', 'class' => 'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Nama</label>
    <div class="col-md-9">
      {{ Form::text('nama', null, ['placeholder' => 'Nama', 'class' => 'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Department</label>
    <div class="col-md-9">
      {{ Form::select('department_id',$department, null, ['placeholder' => 'Jabatan', 'class' => 'form-control', 'placeholder' => 'Pilih']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Jabatan</label>
    <div class="col-md-9">
      {{ Form::select('jabatan',['1' => 'Manager', '2' => 'Supervisor', '3' => 'Staff'], null, ['placeholder' => 'Jabatan', 'class' => 'form-control', 'placeholder' => 'Pilih']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Alamat</label>
    <div class="col-md-9">
      {{ Form::textarea('alamat', null, ['placeholder' => 'Alamat', 'class' => 'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Tanggal Lahir</label>
    <div class="col-md-9">
      {{ Form::date('tanggal_lahir', null, ['placeholder' => 'Tanggal Lahir', 'class' => 'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Gaji</label>
    <div class="col-md-9">
      {{ Form::number('gaji', null, ['placeholder' => 'Gaji', 'class' => 'form-control']) }}
    </div>
  </div>

  <div class="form-group">
    <label for="" class="col-md-3 control-label">Photo</label>
    <div class="col-md-9">
      {{ Form::file('photo') }}
    </div>
  </div>

</div>

<div class="form-actions right1">
  {{ Form::submit('Simpan Data', ['class' => 'btn green']) }}
  {{ link_to('/karyawan', 'Kembali', ['class' => 'btn default']) }}
</div>
