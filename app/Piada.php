<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piada extends Model
{
    protected $table = 'piadas';
    protected $visible =['id','piada'];
}
