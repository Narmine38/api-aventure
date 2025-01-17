<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'shortDescription',
        'longDescription',
        'locationType',
        'restrictions',
        'travelAdvice',
        'picture',
        'story',
    ];

    public function accommodations()
    {
        return $this->hasMany(Accommodation::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
