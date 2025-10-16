<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model {
use HasFactory;
protected $fillable = ['author_id','title','slug','description','price','published'];


public function author(){ return $this->belongsTo(User::class,'author_id'); }
public function modules(){ return $this->hasMany(CourseModule::class); }
public function quizzes(){ return $this->hasMany(Quiz::class); }
}