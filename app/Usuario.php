<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['name','senha','cpf','data'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuarios';

}
