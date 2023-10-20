<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'posts' ;
    protected $with = ['author', 'category'];

    /* function pencarian */
    public function scopeSearch($query, array $search) {

        $query->when($search['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search. '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($search['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
            
        });

        $query->when($search['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    protected $guarded = [
        'id',
    ];

    public function author () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug'=> [
                'source'=> 'title',
            ]
        ];
    }
}