<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'content_title',
        'content_description',
        'slugs',
        'status',
    ];
    public function contentItem()
    {
        return $this->hasMany(ContentItem::class, 'content_id');
    }
}
