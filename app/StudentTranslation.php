<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','description'];
}
