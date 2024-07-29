<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'category',
    //     'content'
    // ];

    protected $guarded = [
        'isActive'
    ];

    // ELOQUENT will take the table posts
    // as it will use the model name Post
    // with undercase and plural form
    // posts

    //  Applying Lower case to title
    //  And uppercase to first letter when getting title
    protected function title(): Attribute {
        return Attribute::make(
            // Mutator
            set: function($value) {
                return strtolower($value);
            },
            // Accesor
            get: function($value) {
                return ucfirst($value);
            }
        );
    }

    // Casting the published_at as a date time
    protected function casts(): array {
        return [
            'published_at' => 'datetime',
            'isActive' => 'boolean'
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // protected $table = 'posts';
}
