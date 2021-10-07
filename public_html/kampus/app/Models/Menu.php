<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'url',
        'menu',
        'jenis',
        'html',
        'parent_id',
    ];

     /**
     * Boot the model.
     */
    protected static function boot(){
        parent::boot();
  
        static::creating(function ($menu) {
            $menu->slug = $menu->createSlug($menu->nama);
        });
    }
  
    /** 
     * Write code on Method
     *
     * @return response()
     */
    private function createSlug($nama){
        if (static::whereSlug($slug = Str::slug($nama))->exists()) {
            $max = static::whereNama($nama)->latest('id')->skip(1)->value('slug');
  
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
  
            return "{$slug}-2";
        }
  
        return $slug;
    }

    public function children(){
        return $this->hasMany( $this, 'parent_id', 'id' );
    }

    public function parent(){
        return $this->hasOne( $this, 'id', 'parent_id' );
    }
}
