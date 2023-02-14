<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];  
   
    protected $dates = ['deleted_at'];

    public function services()
    {
        return $this->hasMany(Service::class,'boite_id','id');
    }
}
