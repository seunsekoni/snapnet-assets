<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    public function asset_type()
    {
        return $this->belongsTo(AssetType::class);
    }

    public function owner_type()
    {
        return $this->belongsTo(OwnerType::class);
    }
}
