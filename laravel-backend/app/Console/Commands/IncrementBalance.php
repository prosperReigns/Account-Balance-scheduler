<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Balance;
use App\Models\BalanceIncrement;
use Carbon\Carbon;

class IncrementBalance extends Command
{
    protected $signature = 'balance:increment';
    protected $description = 'Increment balance by 1000 units every 5 minutes';

    public function handle()
    {
        $balance = Balance::first(); // Assume single user app

        if (!$balance) {
            $this->error('No balance record found.');
            return 1;
        }

        // Increment logic
        $incrementAmount = 1000;
        $balance->amount += $incrementAmount;
        $balance->save();

        // Log the increment
        BalanceIncrement::create([
            'balance_id' => $balance->id,
            'increment_amount' => $incrementAmount,
            'resulting_balance' => $balance->amount,
        ]);

        $this->info('Balance incremented successfully: ' . $balance->amount);
        return 0;
    }
}
