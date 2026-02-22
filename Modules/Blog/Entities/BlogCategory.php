<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Blog\Database\Factories\BlogCategoryFactory;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = "blog_categories";
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "category_name"
    ];

    // protected static function newFactory(): BlogCategoryFactory
    // {
    //     // return BlogCategoryFactory::new();
    // }
}
