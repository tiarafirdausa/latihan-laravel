<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // ini boleh diisi
    // protected $fillable = ['title','excerpt','body'];

    // ini gaboleh diisi
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters){
        //searching
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')                            
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        //searching di category
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        //searching di author
        $query->when($filters['author'] ?? false, function($query, $author){
            return $query->whereHas('author', function($query) use ($author){
                $query->where('username', $author);
            });
        });
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //selalu get slug
    public function getRouteKeyName(){
        return 'slug';
    }

    //buat slug otomatis
    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
