<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $table = 'departaments';
    protected $primaryKey ='Departamentid';
    public $timestamps = false;

    protected $parent = 'parent_id';

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function childs() {
        return $this->hasMany('App\Departament','parent_id','DepartamentId') ;
    }
}
