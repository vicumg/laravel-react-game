<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Island
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property int $point_x
 * @property int $point_y
 * @property int $gold
 * @property int $population
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\IslandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Island newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Island newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Island query()
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereGold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island wherePointX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island wherePointY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island wherePopulation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Island whereUserId($value)
 * @mixin \Eloquent
 */
class Island extends Model
{
    use HasFactory;
}
