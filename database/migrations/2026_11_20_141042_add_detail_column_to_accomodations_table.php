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
            if (!Schema::hasColumn('accomodations', 'tagline')) {
                $table->string('tagline')->after('name');
                $table->string('type')->after('tagline');
                $table->integer('price')->after('type');
                $table->string('email')->after('price');
                $table->string('phone_number')->after('email');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accomodations', function (Blueprint $table) {
            $table->dropColumn(['tagline', 'type', 'price', 'email', 'phone_number']);
        });
    }
};
