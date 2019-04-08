<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey ='Roleid';
    public $timestamps = false;

    protected $fillable = array('description');

    public function user()
    {
        return $this->hasMany('App\User','role','RoleId');
    }

}
