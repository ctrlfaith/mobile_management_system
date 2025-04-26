<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilePhone extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'cpu', 'ram', 'brand_id', 'os_id', 'launch_price'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function operatingSystem()
    {
        return $this->belongsTo(OperatingSystem::class, 'os_id');
    }
}
