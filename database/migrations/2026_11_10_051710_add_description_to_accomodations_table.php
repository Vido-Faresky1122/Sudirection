<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('accomodations', function (Blueprint $table) {
            if (!Schema::hasColumn('accomodations', 'description')) {
                $table->text('description')->after('name');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accomodations', function (Blueprint $table) {
            if (Schema::hasColumn('accomodations', 'description')) {
                $table->dropColumn('description');
            }
        });
    }
};
