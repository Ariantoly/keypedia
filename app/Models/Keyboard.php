<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function carts() {
        return $this->belongsToMany(CartDetail::class, 'cart_details', 'keyboard_id', 'id');
    }

    public function transactionDetails() {
        return $this->belongsToMany(TransactionDetail::class);
    }
}
