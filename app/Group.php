<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function employees() {
        return $this->hasMany('App\Employee','group_id');
    }
}
