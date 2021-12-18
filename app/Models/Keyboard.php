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

    public function cartDetails() {
        return $this->belongsTo(CartDetail::class, 'keyboard_id', 'id');
    }

    public function transactionDetails() {
        return $this->belongsTo(TransactionDetail::class);
    }
}
