<?php

namespace Modules\Crud\Entities;

use Illuminate\Database\Eloquent\Model;

class UserTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'crud__user_translations';
}
