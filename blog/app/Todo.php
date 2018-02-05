<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Todo extends Model
{
    protected $fillable = ['libelle'];
}
