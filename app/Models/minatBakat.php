<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factory\HashFactory;
use Illuminate\Database\Eloquent\Model;

class minatBakat extends Model
{
    //
    use HashFactory ;
    
    protected $fillable = ['question', 'opsi'];
    
    protected $casts = [
      'opsi' => 'array'
      ,];
    
}
