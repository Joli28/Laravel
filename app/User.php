<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'Users';

    protected $primaryKey='username';

    public $incrementing=false;

    protected $keyType='string';

    public $timestamps = false;


   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('username', 'password','role');
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    
     public function getAuthPassword()
     {
         return $this->password;
     }

      
     public function getAuthIdentifier()
     {
         return $this->getKey();
     }

     public function setPasswordAttribute($password)
    {   
        
         // //      //$this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
          $this->attributes['password'] = bcrypt($password);
        // // //     // if ('' !== $password) {
         // // //     //     $this->attributes['password'] = Hash::make($password);
        // // //     // }

    }
}
