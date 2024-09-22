<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $slug
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /** @var array<string> */
    protected $with = ['category'];

    /**
     * @param Builder<Product> $query
     * @param array<string, mixed> $filters
     * @return Builder<Product>
     */
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        $query->when(
            $filters['search'] ?? false,
            fn (Builder $query, $search) =>
                $query->where(
                    fn ($query) =>
                        $query->where('name', 'like', '%' . $search . '%')
                            ->orWhere('description', 'like', '%' . $search . '%')
                )
        );

        $query->when(
            $filters['category'] ?? false,
            fn (Builder $query, $category) =>
                $query->whereHas(
                    'category',
                    fn ($query) =>
                        $query->where('slug', $category)
                )
        );

        return $query;
    }

    /**
     * @return BelongsTo<Category, Product>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany<Cart>
     */
    public function cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
