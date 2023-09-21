<?php

use App\Models\Schedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { //opcion1
        Schedule::create([
            'id' => 1,
            'cycle' => '1° ciclo'
        ]);
        Schedule::create([
            'id' => 2,
            'cycle' => '2° ciclo'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schedule::query()->delete();
    }
};
