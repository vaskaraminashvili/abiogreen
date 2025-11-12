<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class SubCompany extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'title',
        'short_desc',
        'description',
        'status',
        'sort',
        'external_link',
        'email',
    ];

    protected $translatable = [
        'title',
        'short_desc',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'sort' => 'integer',
            'title' => 'array',
            'short_desc' => 'array',
            'description' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    protected function getSortOrderAttribute(): int
    {
        return (int) $this->sort;
    }

    protected function setSortOrderAttribute(int $value): void
    {
        $this->attributes['sort'] = $value;
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
