<?php

namespace Modules\Crud\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Translatable;

    protected $table = 'crud__users';
    public $translatedAttributes = [];
    protected $fillable = ['name','phone'];
}
