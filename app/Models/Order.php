<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'orderId',
        'oldFile',
        'newFile',
        'topic',
        'mode',
        'essay_number',
        'instructions',
        'amount',
        'referenceId',
        'completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function completeOrder()
    {
        return $this->hasOne(CompleteOrder::class);
    }

}
