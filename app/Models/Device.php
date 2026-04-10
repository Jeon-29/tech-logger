<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'client_name',
        'device_model',
        'issue_description',
        'status',
    ];
}
