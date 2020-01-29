<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title','completed',
    ];
    public $hidden = ['created_at','updated_at'];
    public $table = 'todos';
}
