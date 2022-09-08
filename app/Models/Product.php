<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function nosology()
    {
      return $this->belongsToMany(Nosology::class);
    }

    public function atx()
    {
      return $this->belongsToMany(Atx::class);
    }
}
