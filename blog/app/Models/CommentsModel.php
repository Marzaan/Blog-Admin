<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    public $table='comments';
    public $primaryKey='cid';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=true;
}
