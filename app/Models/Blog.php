<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'slugs',
        'category_id',
        'thumbnail',
        'seo_title',
        'seo_description',
        'seo_tags',
        'content',
        'status',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
