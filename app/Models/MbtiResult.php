<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbtiResult extends Model
{
    use HasFactory;

    protected $table = 'mbti_results';

    public $timestamps = false;  // Disable timestamps

    protected $fillable = [
        'user_id',
        'mbti_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
