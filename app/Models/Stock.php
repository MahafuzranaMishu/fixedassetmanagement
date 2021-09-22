<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Stock extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function Asset()
    {
        
        return $this->belongsTo(Asset::class,'asset_id','id');
    }
}
