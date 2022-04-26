<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Udobrenie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'udobrenies';
    protected $guarded=false;
}
