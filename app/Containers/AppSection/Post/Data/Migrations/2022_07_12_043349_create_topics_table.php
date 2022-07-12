<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->char("name");
            $table->char("code");
            $table->timestamps();
            //$table->softDeletes();
        });
        DB::table('topics')->insert([
            [
                'name' => 'Picnic',
                'code' => 'A1'
            ],
            [
                'name' => 'Study',
                'code' => 'A2'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
}
