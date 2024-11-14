<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeasionPlan extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'seasion_plans';
    protected $fillable = [
        'id',
        'title',
        'status',
    ];
}
