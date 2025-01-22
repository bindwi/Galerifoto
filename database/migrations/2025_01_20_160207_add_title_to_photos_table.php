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
        Schema::table('photos', function (Blueprint $table) {
            // Menambah kolom title, description, dan image_url
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('photos', function (Blueprint $table) {
            // Menghapus kolom jika rollback dilakukan
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('image_url');
        });
    }
};
