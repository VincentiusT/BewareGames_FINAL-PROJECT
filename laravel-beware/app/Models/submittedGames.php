<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submittedGames extends Model
{
    use HasFactory;
    protected $table='submittedgames';
    protected $fillable = ['name','genre','description','link'];
}
