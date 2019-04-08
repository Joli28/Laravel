<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
  
  
    protected $primaryKey = 'ssn';
    protected  $incrementing =false;
    protected $keyType = 'string';
    public $timestamps = false;


    protected $fillable =['ssn','name','surname','address','photo','DepartamentId','username'];

    // DEFINE RELATIONSHIPS --------------------------------------------------
     public function departament() {
         return $this->hasOne('App\Departament','DepartamentId'); 
     }

     public function user() {
         return $this->hasOne('App\User','username');
     }
}
