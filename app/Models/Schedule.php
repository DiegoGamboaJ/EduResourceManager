<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';


    protected $fillable = [
        'id',
        'cycle',
    ];

    // One to Many
    public function grade(): HasMany
    {
        return $this->hasMany(Grade::class);
    }

    // One to Many
    public function block(): HasMany
    {
        return $this->hasMany(Block::class);
    }
}
