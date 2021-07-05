<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    public $table='posts';
    public $primaryKey='pid';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;
}
