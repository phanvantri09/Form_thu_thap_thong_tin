<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionInPart extends Model
{
    use HasFactory;
    protected $table="question_in_part";
    protected $fillable =[
        "id_part",
        "id_question",
        'created_at',
        'updated_at',
        "rating"
    ];
    public function part(){
        return $this->belongsTo(Part::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
