<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id',
        'title',
        'slugs',
        'budget',
        'client',
        'seo_title',
        'seo_description',
        'seo_tags',
        'thumbnail',
        'status',
    ];
}
