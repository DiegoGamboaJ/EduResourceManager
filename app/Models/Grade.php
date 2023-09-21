<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';


    protected $fillable = [
        'id',
        'name',
        'schedule_id',
    ];

    // Many to One
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    // One to Many
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }


}
