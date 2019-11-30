<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charada extends Model
{
    protected $table = 'charadas';
    protected $visible = ['pergunta','resposta'];

}
