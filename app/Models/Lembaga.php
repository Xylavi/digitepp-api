<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $table = 'mst_lembaga';
    protected $fillable = ['nama'];
}
