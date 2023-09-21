<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Block extends Model
{
    use HasFactory;

    protected $table = 'blocks';

    protected $fillable = [
        'id',
        'start_time',
        'end_time',
        'schedule_id',
    ];

    protected function startTime(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('H:i'),
        );
    }

    protected function endTime(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('H:i'),
        );
    }

    // Many to One
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    // One to One
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
