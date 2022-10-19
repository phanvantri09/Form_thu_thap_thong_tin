<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $table="part";
    protected $fillable =[
        "id_form",
        "name",
        'created_at',
        'updated_at'
    ];
    public function question(){
        return $this->hasMany(Question::class);
    }
    public function questioninpart(){
        return $this->hasMany(QuestionInPart::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('name','like','%'.$searchData.'%');
        }
        return $queryData;
    }
}
