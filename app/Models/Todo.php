<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'my_flights';
    // protected $primaryKey = 'flight_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;

    protected $fillable = ['nome','votos'];

    //protected $guarded = [];





}
