<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupaKultur extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'grupa_kulturs';
    protected $guarded=false;
}
