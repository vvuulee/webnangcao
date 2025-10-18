<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory,Sluggable;
   
    protected $fillable = [
        'title',
        'description',
        'price',
        'instructor',
        'image_path',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title' // Lấy cột 'title' làm nguồn để tạo 'slug'
            ]
        ];
    }
}

