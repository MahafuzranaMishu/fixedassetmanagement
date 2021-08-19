<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function Asset()
    {
        return $this->belongsTo(Asset::class,'assets_id','id');
    }
}
