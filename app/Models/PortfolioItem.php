<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'title_it',
        'title_en',
        'description_it',
        'description_en',
        'year',
        'image',
        'partner',
        'cta_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'year' => 'integer',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderByDesc('year');
    }

    public function getTitle(): string
    {
        $locale = app()->getLocale();

        return $this->{"title_{$locale}"} ?? $this->title_it;
    }

    public function getDescription(): string
    {
        $locale = app()->getLocale();

        return $this->{"description_{$locale}"} ?? $this->description_it;
    }
}
