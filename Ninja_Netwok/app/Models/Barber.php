<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $fillable = ['Name', 'Job', 'Age'];
    /** @use HasFactory<\Database\Factories\BarberFactory> */
    use HasFactory;
}
