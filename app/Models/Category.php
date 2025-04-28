<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sort_order',
    ];

    /**
     * Get the menu items for the category.
     */
    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
} 