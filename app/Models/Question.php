<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table="question";
    protected $fillable =[
        "name",
        'created_at',
        'updated_at',
        'type',
    ];
    public function part(){
        return $this->belongsTo(Part::class);
    }
    public function user(){
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
