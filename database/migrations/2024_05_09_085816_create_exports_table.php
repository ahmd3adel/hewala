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
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('phone');
            $table->string('received_currency');
            $table->string('sent_currency');
            $table->string('received_amount');
            $table->string('amount_sent');
            $table->enum('status', ['pending', 'delivered']); // Fix enum declaration
            $table->string('tax');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};
