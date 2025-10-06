<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class TeamMember extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'name',
        'surname',
        'position',
        'description',
        'profile_data',
        'status',
    ];

    protected $translatable = [
        'name',
        'surname',
        'position',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'name' => 'array',
            'surname' => 'array',
            'position' => 'array',
            'description' => 'array',
            'profile_data' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('team')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10);

        $this->addMediaConversion('portrait')
            ->width(677)
            ->height(688)
            ->sharpen(10);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
}
