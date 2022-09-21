<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atx extends Model
{
    use HasFactory;

    public $timestamps = false;
    public static $tag = 'atx';

    public function products()
    {
      return $this->belongsToMany(Product::class);
    }
}
