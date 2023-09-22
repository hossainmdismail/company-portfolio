<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slugs',
        'budget',
        'client',
        'seo_title',
        'seo_description',
        'seo_tags',
        'thumbnail',
        'content',
        'status',
    ];

    function rel_to_product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}