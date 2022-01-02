<?php

namespace App\Models;

use App\Scopes\ApprovedScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Recipe
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string|null $image
 * @property array $steps
 * @property int $cooking_time_minutes
 * @property string $type
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $author
 * @property-read \App\Models\Rating|null $averageRating
 * @property-read mixed $average_rating
 * @property-read mixed $image_path
 * @property-read mixed $is_vegeratian
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ingredient[] $ingredients
 * @property-read int|null $ingredients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe approved()
 * @method static \Database\Factories\RecipeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCookingTimeMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereSteps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recipe whereUserId($value)
 * @mixin \Eloquent
 */
class Recipe extends Model
{
    use HasFactory;


    public $guarded = [];
    protected $casts = ['steps' => 'array'];
    /**
     * @var mixed
     */


    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->hasOne(Rating::class)->selectRaw('recipe_id, avg(*) as aggregate')->groupBy('recipe_id');
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->average('rating');
    }

    public function getIsVegeratianAttribute()
    {
        return $this->type == 'vegetarian';
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot(['amount', 'unit']);
    }

    public function getImagePathAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/DrawKit-cooking-kitchen-food-vector-illustrations-12.svg');
    }

}
