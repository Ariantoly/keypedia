<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'keyboard_id';

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function keyboard() {
        return $this->hasOne(Keyboard::class, 'id', 'keyboard_id');
    }
}
