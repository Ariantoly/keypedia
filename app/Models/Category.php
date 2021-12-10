<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function keyboards() {
        return $this->hasMany(Keyboard::class, 'category_id', 'id');
    }
}
