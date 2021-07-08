<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'level',
        'language',
        'price',
        'discount',
        'tags',
        'overview_provider',
        'overview_url',
        'thumbnail',
        'user_id',
        'status',
    ];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function category(){
        return $this->belongsTo(Categorie::class,'category_id','id');
    }
    public function courses(){
        return $this->hasMany(Section::class,'course_id');
    }
}
