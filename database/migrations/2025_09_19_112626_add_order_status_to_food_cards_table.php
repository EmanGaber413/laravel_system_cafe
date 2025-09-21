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
    Schema::table('food_cards', function (Blueprint $table) {
        $table->string('order_status')->default('in_progress');
    });
}

public function down()
{
    Schema::table('food_cards', function (Blueprint $table) {
        $table->dropColumn('order_status');
    });
}

};
