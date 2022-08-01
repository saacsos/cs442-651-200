<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // trait

    public function scopeAdvertise($query)
    {
        return $query->where('like_count', '<', 1000)
                     ->where('view_count', '>', 70000);
    }

    public function scopePopular($query, $like_count, $view_count)
    {
        return $query->where('like_count', '>=', $like_count)
                     ->where('view_count', '>=', $view_count);
    }

    public function scopeFilterTitle($query, $search)
    {
        return $query->where('title', 'LIKE', "%{$search}%"); // % wildcard
    }

    private function numberToK($value) {
        return ($value >= 1000000)
            ? round($value / 1000000, 1) . 'm'
            : (
                ($value >= 1000)
                ? round($value / 1000, 1) . 'k'
                : $value
            );
    }

    public function viewCount() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->numberToK($value)
        );
    }

    public function likeCount() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->numberToK($value)
        );
    }
}
