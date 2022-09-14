<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  public $timestamps = false;

  public function posts()
  {
    return $this->belongsToMany(Post::class);
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