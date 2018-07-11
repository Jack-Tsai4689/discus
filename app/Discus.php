<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discus extends Model
{
    public $primaryKey = 'id';
    public $table = 'discuses';
    public $fillable = ['title', 'content', 'parent_id'];
}
