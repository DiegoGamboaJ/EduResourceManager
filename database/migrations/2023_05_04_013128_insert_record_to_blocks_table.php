<?php

use App\Models\Block;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { //opcion2 multiple insert
        $now = now();

        Block::insert([
            [
                'id' => 1,
                'start_time' => '07:45',
                'end_time' => '08:30',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 2,
                'start_time' => '08:30',
                'end_time' => '09:15',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 3,
                'start_time' => '09:30',
                'end_time' => '10:15',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 4,
                'start_time' => '10:15',
                'end_time' => '11:00',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 5,
                'start_time' => '11:15',
                'end_time' => '12:00',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 6,
                'start_time' => '12:00',
                'end_time' => '12:45',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 7,
                'start_time' => '12:55',
                'end_time' => '13:40',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 8,
                'start_time' => '13:40',
                'end_time' => '14:25',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 9,
                'start_time' => '07:45',
                'end_time' => '08:30',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 10,
                'start_time' => '08:30',
                'end_time' => '09:15',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 11,
                'start_time' => '09:15',
                'end_time' => '10:00',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 12,
                'start_time' => '10:15',
                'end_time' => '11:00',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 13,
                'start_time' => '11:00',
                'end_time' => '11:45',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 14,
                'start_time' => '12:00',
                'end_time' => '12:45',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 15,
                'start_time' => '12:45',
                'end_time' => '13:30',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 16,
                'start_time' => '13:40',
                'end_time' => '14:25',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Block::query()->delete();
    }
};
