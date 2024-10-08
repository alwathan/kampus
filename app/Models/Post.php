<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'content',
        'media',
        'type',
        'published_at',
    ];

     /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = $post->createSlug($post->title);
            $post->media = $post->createMedia($post->content);
            //$post->save();
        });
        static::updating(function ($post) {
            $post->media = $post->createMedia($post->content);
            //$post->save();
        });
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($title){
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereTitle($title)->latest('id')->skip(1)->value('slug');

            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }

    private function createMedia($html){
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $html, $image);
        return empty($image[1])?'':$image[1];
    }

}
