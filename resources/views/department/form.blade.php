<div class="form-body">
  <div class="form-group">
    <label for="" class="col-md-3 control-label">Department Name</label>
    <div class="col-md-9">
      {{ Form::text('department', null, ['placeholder' => 'Department', 'class' => 'form-control', 'required' => '']) }}
    </div>
  </div>
</div>

<div class="form-actions right1">
  {{ Form::submit('Simpan Data', ['class' => 'btn green']) }}
  {{ link_to('/department', 'Kembali', ['class' => 'btn default']) }}
</div>
