<?php

use App\Models\Device;
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
        Device::insert([
            [
                'id' => 1,
                'name' => 'Computadores'
            ],

            [
                'id' => 2,
                'name' => 'Tablets'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Device::query()->delete();
    }
};
