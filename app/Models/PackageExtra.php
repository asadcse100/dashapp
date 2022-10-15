<?php

namespace App\Models;

use App\Models\PackagePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageExtra extends Model
{
    use SoftDeletes;
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }
}
