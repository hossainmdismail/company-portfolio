<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'description', 'status'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
