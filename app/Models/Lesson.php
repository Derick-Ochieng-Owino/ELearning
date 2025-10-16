<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Lesson extends Model { protected $fillable = ['module_id','title','content_html','video_url','duration','sort_order']; public function module(){ return $this->belongsTo(CourseModule::class,'module_id'); } }