<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $fillable = [
        'section_id',
        'title',
        'description',
        'image',
        'extra',
        'order',
        'is_active'
    ];
    protected $casts = [
        'extra' => 'array',
        'is_active' => 'boolean'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function getExtra($key, $default = null)
    {
        return $this->extra[$key] ?? $default;
    }
}