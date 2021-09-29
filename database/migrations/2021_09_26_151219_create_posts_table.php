<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;


class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('slug');
            $table->string('title');
            $table->text('content');
            $table->string('type');
            $table->string('media');
            $table->timestamps();
        });

        $data = new Post;

        $data->user_id = '1';
        $data->title = 'Demo Judul Posting';
        $data->content = 'Demo Isi Posting';

        $data->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
