<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamentos';

    static function query()
    {
        return \DB::table('medicamentos')->get();
    }
}
