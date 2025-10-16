<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Submission extends Model { protected $fillable = ['assignment_id','user_id','file_url','content','submitted_at','grade','graded_by','feedback']; public function assignment(){ return $this->belongsTo(Assignment::class); } }