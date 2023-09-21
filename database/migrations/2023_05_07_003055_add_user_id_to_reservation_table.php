<?php

use App\Models\Grade;
use App\Models\Reservation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::table(('reservation'), function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('important');
        });

        $grades = Grade::all();

        foreach($grades as $grade){
            $user_id = $grade->user_id;
            
            Reservation::where('grade_id', $grade->id)
                ->update(['user_id' => $user_id]);
        }

        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table(('reservation'), function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    
        Schema::table(('grades'), function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
        });

        $reservations = Reservation::all();

        foreach($reservations as $reservation){
            $user_id = $reservation->user_id;
            
            Grade::where('id', $reservation->grade_id)
                ->update(['user_id' => $user_id]);
        }

        Schema::table('reservation', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table(('grades'), function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

    }
};
