<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function serviceItem()
    // {
    //     return $this->hasMany(ServiceItem::class, 'service_id');
    // }
    public function serviceContent()
    {
        return $this->hasMany(ServiceContents::class, 'service_id');
    }
    public function content()
    {
        return $this->hasMany(Contents::class, 'service_id');
    }

}

