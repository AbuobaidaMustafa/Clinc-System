<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class measurement extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable = ['drug_id','name'];

    public function drug()
    {
        return $this->belongsTo(drug::class);
    }
}
