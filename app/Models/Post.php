<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  public function categories()
  {
    return $this->belongsToMany(Category::class);
  }

  public function scopeScientific()
  {
    return $this->where('scientific', true);
  }

  public function scopeForPatients()
  {
    return $this->where('for_patients', true);
  }
}
