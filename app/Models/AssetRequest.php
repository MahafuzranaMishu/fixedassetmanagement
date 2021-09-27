<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetRequest extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function Asset()
    {
        return $this->belongsTo(Asset::class,'asset_id','id');
    }
    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
