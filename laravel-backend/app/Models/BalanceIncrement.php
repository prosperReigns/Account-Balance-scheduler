<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalanceIncrement extends Model
{
    protected $fillable = ['balance_id', 'increment_amount', 'resulting_balance'];

}
