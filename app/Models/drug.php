<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drug extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;
    public function measurements()
    {
        return $this->hasMany(measurement::class);
    }
}
