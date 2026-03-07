<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = ['key', 'value'];
    protected $casts = [
        'value' => 'array'
    ];

    public static function get(string $key, $default = null)
    {
        return Cache::rememberForever(
            "settings_${key}",
            fn () => optional(
                self::where('key', $key)-first()
            )->value ?? $default
        );
    }

    public static function set($key, $value): void
    {
        self::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        Cache::forgot("settings_${key}");
    }


}