<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Jika nama Primary Key nya bukan ID maka kita wajib deklarasikan field primary key nya
    // protected $keyType = 'varchar';
    protected $primaryKey = "nik";
    public $incrementing = false;
}
