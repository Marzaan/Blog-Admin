<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    public $table='users';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;
}
