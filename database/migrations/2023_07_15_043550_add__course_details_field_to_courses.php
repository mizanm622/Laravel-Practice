<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. to change the column name type: (php artisan make:migration add_columnName_field_to_tableName) Command
     */
    public function up(): void
    {
        /*
        Schema::table('courses', function (Blueprint $table) {
            $table->string('CourseDetails')->nullable()->after('CourseId');
        });
        */
    }

    /**
     * Reverse the migrations. to delete column type: (php artisan make:rollback) command
     */
    public function down(): void
    {
        /*
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('CourseDetails');
        });
        */
    }
};
