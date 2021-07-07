<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'course_id'
    ];
    
    public function user(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    
    public function categories(){
        return $this->hasMany(Categorie::class,'user_id');
    }

}
