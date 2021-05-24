<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\drugSubCategory;

class drugCategory extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey = 'id';
    protected $fillable = ['code','category_name'];
    
    public function drugSubCategory()
    {
        return $this->hasMany(drugSubCategory::class,'category_code','id');
    }
}
