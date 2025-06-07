<?php

use App\Enums\PacketStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_id');
            $table->integer('product_id');
            $table->string('product_img');
            $table->string('product_name');
            $table->string('size')->nullable();
            $table->integer('quantity');
            $table->integer('price_item');
            $table->enum('packet_status',[
                PacketStatus::Menunggu_Konfirmasi->value,
                PacketStatus::Sedang_Diproses->value,
                PacketStatus::Di_Perjalanan->value,
                PacketStatus::Di_Batalkan->value,
                PacketStatus::Paket_Sampai->value
            ])->default(PacketStatus::Menunggu_Konfirmasi->value);
            $table->timestamps();

            $table->foreign('payment_id')->references('payment_id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_items');
    }
};
