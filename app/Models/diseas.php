<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diseas extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = "id";
}
