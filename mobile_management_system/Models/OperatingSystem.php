<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'version'];

    public function mobilePhones()
    {
        return $this->hasMany(MobilePhone::class, 'os_id');
    }
}
