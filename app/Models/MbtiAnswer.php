<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbtiAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'point'];

    // If you're not using default timestamps, add this:
    public $timestamps = true;
}
