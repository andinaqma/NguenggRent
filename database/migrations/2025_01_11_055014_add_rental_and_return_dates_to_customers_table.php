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
    Schema::table('customers', function (Blueprint $table) {
        $table->date('rental_date')->nullable()->after('ktp'); // Kolom tanggal peminjaman
        $table->date('return_date')->nullable()->after('rental_date'); // Kolom tanggal pengembalian
    });
    }

    public function down()
    {
    Schema::table('customers', function (Blueprint $table) {
        $table->dropColumn(['rental_date', 'return_date']);
    });
    }

};
