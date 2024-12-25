<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding the new columns
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('assistance_type')->nullable();
            $table->string('zipcode')->nullable();
            $table->text('message')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Dropping the columns if we need to rollback
            $table->dropColumn([
                'phone', 'address', 'city', 'state', 'assistance_type', 'zipcode', 'message'
            ]);
        });
    }
};
