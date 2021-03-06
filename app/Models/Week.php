<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create()
 * @method static find(int $i)
 * @property HasMany $games
 */
class Week extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    public $timestamps = false;

    public function games(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
