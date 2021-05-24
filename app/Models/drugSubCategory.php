<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\drugCategory;

class drugSubCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = "id";
    public function drugCategory()
    {
        return $this->belongsTo(drugCategory::class,'category_code');
    }
}
