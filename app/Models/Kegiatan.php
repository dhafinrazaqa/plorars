<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Berkayk\OneSignal\OneSignalFacade as OneSignal;

class Kegiatan extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'judul',
        'kategori',
        'fakultas',
        'deskripsi',
        'gambar',
        'link',
    ];

    protected static function booted()
    {
        // Listen for the 'created' event
        static::created(function ($post) {
            OneSignal::sendNotificationToAll(
                "New Post: {$post->title}",
                $url = route('posts.show', $post->id)
            );
        });

        // Listen for the 'updated' event
        static::updated(function ($post) {
            OneSignal::sendNotificationToAll(
                "Post Updated: {$post->title}",
                $url = route('posts.show', $post->id)
            );
        });
    }
}
