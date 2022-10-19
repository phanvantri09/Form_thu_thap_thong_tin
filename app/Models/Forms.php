<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table="forms";
    protected $fillable =[
        "name",
        'created_at',
        'updated_at',
        'id_objects'
    ];
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('name','like','%'.$searchData.'%');
        }
        return $queryData;
    }
    public function users()
    {
        return $this->hasOne(Users::class);
    }

    public function part(){
        return $this->hasMany(Part::class);
    }
    public function question(){
        return $this->hasMany(Question::class);
    }
}
