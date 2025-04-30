<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\BalanceIncrement;

class BalanceController extends Controller
{
    // POST /api/balance/set
    public function setInitialBalance(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0'
        ]);

        $balance = Balance::first(); // Assume single user app
        if (!$balance) {
            $balance = new Balance();
        }

        $balance->amount = $request->amount;
        $balance->save();

        return response()->json(['message' => 'Initial balance set successfully', 'balance' => $balance]);
    }

    // GET /api/balance/history
    public function getIncrementHistory()
    {
        $history = BalanceIncrement::orderBy('created_at', 'desc')->get();

        return response()->json(['history' => $history]);
    }
}
