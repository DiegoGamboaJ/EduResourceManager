<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservation';

    protected $fillable = [
        'date',
        'important',
        'user_id',
        'grade_id',
        'block_id',
    ];

    protected function date(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d'),
        );
    }

    /**
     * Get the user that owns the Reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     // Many to One
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // One to One
    public function block(): BelongsTo
    {
        return $this->belongsTo(Block::class);
    }

     // Many to One
     public function grade(): BelongsTo
     {
         return $this->belongsTo(Grade::class);
     }

}
