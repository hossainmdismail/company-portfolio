<?php

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
        Schema::create('content_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->string('item_title',255);
            $table->string('item_description',255);
            $table->integer('status')->default(1);
            $table->timestamps();
            //
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_items');
    }
};
