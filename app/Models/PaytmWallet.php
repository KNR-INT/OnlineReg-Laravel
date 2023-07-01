<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaytmWallet extends Model
{
    use HasFactory;
    
    protected $table = 'payment';
    protected $fillable = [
        'order_id',
        'user_id',
        'mobile_number',
        'email',
        'amount',
        'status',
    ];
}