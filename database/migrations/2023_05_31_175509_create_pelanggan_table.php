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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('username',150);
            $table->string('password',150);
            $table->string('email',150);
            $table->string('nama',150);
            $table->string('telepon',15);
            $table->string('alamat',200);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });

        // DB::table('pelanggan')->insert(
        //     array(
        //         'nama' => 'Indra Purnama',
        //         'username' => 'indrapurnama29',
        //         'password' => Hash::make('indrapurnama'),
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     )
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
