<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function asset()
    {
        return $this->belongsTo(Asset::class,'asset_id','id');
    }
    public function allocation()
    {
        return $this->belongsTo(Allocation::class,'allocation_id','id');
    }
}
