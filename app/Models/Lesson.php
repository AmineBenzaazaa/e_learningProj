<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'summary',
        'section_id',
        'url',
    ];
    public function section(){
        return $this->belongsTo(Section::class,'course_id','id');
    }
}
