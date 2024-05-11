<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch',
        'phone',
        'received_currency',
        'sent_currency',
        'received_amount',
        'amount_sent',
        'tax',
        'status',
        'received_amount',
    ];
}
