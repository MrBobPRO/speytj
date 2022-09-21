<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nosology extends Model
{
    use HasFactory;

    public $timestamps = false;
    public static $tag = 'nosology';

    public function products()
    {
      return $this->belongsToMany(Product::class);
    }
}
