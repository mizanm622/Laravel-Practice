<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to change the type of column right :(php artisan make:migration change_columnName_tableName) command
     */
    public function up(): void
    {
        /*
        Schema::table('courses', function(Blueprint $table){

       $table->text('CourseDetails')->nullable()->change();

        });
        */
    }

    /**
     * Reverse the migrations.to delete column : (php artisan make:rollback) command
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
