<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueReference extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function services()
    {
        return $this->hasMany(ValueReference::class,'type_ref_id','id');
    }
}
