<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'transaction_id';

    public function transactionHeader() {
        return $this->belongsTo(TransactionHeader::class);
    }

    public function keyboard() {
        return $this->hasOne(Keyboard::class, 'id', 'keyboard_id');
    }
}
