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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerbangans_id')->constrained('penerbangans');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('status', ['paid', 'unpaid'])->nullable();
            $table->enum('adam_conf', ['Process', 'Unconfirmed'])->nullable();
            $table->string('total', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
