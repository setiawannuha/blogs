<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'banner',
      'content',
      'category',
      'tags',
      'users_id'
    ];

    public function users(){
      return $this->belongsTo(User::class);
    }
}
