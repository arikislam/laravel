<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class CenterInfo extends Authenticatable
{
    use Notifiable;
   

    protected $table = 'center_info';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    ['eiin_no','inst_name','inst_pass','inst_pass2','is_diposited','is_conf'];




    public function getAuthPassword()
    {
        return $this->inst_pass;

    }
}