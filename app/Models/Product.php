<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function getTagsStringAttribute()
    {
        return implode(', ', $this->tags->pluck('name')->toArray());
    }

    public function asTag($tag){
        return $this->tags->contains($tag);
    }
}
