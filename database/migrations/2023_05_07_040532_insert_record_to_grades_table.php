<?php

use App\Models\Grade;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $now = now();

        Grade::insert([
            [
                'id' => 1,
                'name' => '1°A',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 2,
                'name' => '1°B',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 3,
                'name' => '2°A',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 4,
                'name' => '2°B',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 5,
                'name' => '3°A',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 6,
                'name' => '3°B',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 7,
                'name' => '4°A',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 8,
                'name' => '4°B',
                'schedule_id' => 1,
                'created_at' => $now,
            ],
            [
                'id' => 9,
                'name' => '5°A',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 10,
                'name' => '5°B',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 11,
                'name' => '6°A',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 12,
                'name' => '6°B',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 13,
                'name' => '7°A',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 14,
                'name' => '7°B',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 15,
                'name' => '8°A',
                'schedule_id' => 2,
                'created_at' => $now,
            ],
            [
                'id' => 16,
                'name' => '8°B',
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
        Grade::query()->delete();
    }
};
