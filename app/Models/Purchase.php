<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function Asset()
    {
        //who->relation name->to whom
        // 1 to  1 dependent =belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->belongsTo(Asset::class,'asset_id','id');
    }

    public function Supplier()
    {
        //who->relation name->to whom
        // 1 to  1 dependent =belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->belongsTo(Supplier::class,'supplier_id','id');
    }
}
