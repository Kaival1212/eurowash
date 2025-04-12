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
        Schema::create('locker_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('locker_id')->constrained()->onDelete('cascade');
            //$table->foreignId('user_id')->constrained()->nullable()->onDelete('cascade');
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->decimal("price")->nullable();
            $table->enum("payment", ["pending", "paid", "failed"])->default("pending");
            $table->string("payment_link")->nullable();
            $table->string("payment_id")->nullable();
            $table->string("invoice_link")->nullable();
            $table->enum("status", ["pending", "confirmed", "completed" , "cancelled"])->default("pending");
            $table->string("before_code");
            $table->string("after_code")->nullable();
            $table->string("Notes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locker_orders');
    }
};
