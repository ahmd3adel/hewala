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
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('phone');
            $table->string('received_currency');
            $table->string('sent_currency');
            $table->decimal('received_amount', 10, 2);
            $table->decimal('amount_sent', 10, 2);
            $table->enum('status' , ['pending' , 'delivered'])->default('pending');
            $table->decimal('tax', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};
