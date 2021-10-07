<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key')->unique();
            $table->string('value');
            $table->timestamps();
        });

        $data = [
            ['name' => 'Nama Situs', 'key' => 'nama', 'value' => ''],
            ['name' => 'Deskripsi Situs', 'key' => 'description', 'value' => ''],
            ['name' => 'Alamat URL', 'key' => 'url', 'value' => ''],
            ['name' => 'Logo', 'key' => 'logo', 'value' => ''],
            ['name' => 'Video promosi', 'key' => 'vhome', 'value' => '']
        ];

        Setting::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
