<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AamarPay extends Model
{
    protected $fillable = ['id', 'store_id', 'signature_key'];
}