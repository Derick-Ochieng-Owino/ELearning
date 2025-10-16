<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Assignment extends Model { protected $fillable = ['course_id','lesson_id','title','instructions','due_date','points']; public function course(){ return $this->belongsTo(Course::class); } }