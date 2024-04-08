<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\StockIn;
use App\Models\Survey;
use Illuminate\Http\Request;

class LineChartController extends Controller
{
    public function index(Request $request)
    {

        $user = $request->user();
                $data = StockIn::query()
                ->where('user_id', $user->id)
        ->selectRaw('
            MAX(id) as id,
             SUM(quantity) as quantity,
             DATE(created_at) as date

        ')
        ->groupBy(  'date' )
        ->get();

        $data1 = Cart::query()
        ->where('user_id', $user->id)

        ->selectRaw('
            MAX(id) as id,
            SUM(totalStockOutPrice) as totalPrice,

            SUM(quantity) as quantity,
            MAX(Transaction) as Transaction,
            DATE(created_at) as date

        ')
        ->groupBy(  'date')
        ->get();











        return response()->json([
            'stockin'=>$data,
                        'stockout'=>$data1,


        ]);
    }
}
