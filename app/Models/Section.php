<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sections extends Model
{
    use HasFactory;

    protected $table = 'sections';
    protected $fillable = ['type', 'title', 'subtitle', 'content', 'order', 'is_active'];
    protected $casts = ['content' => 'array', 'is_active' => 'boolean'];

    public function Items()
    {
        return $this->hasMany(Item::class)->where('is_active', true)->orderBy('order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function getContent(string $key, $default = null)
    {
        return $this->content[$key] ?? $default;
    }
}