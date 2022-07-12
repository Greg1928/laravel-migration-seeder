<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $mytime = Carbon::now()->format('Y-m-d');
        $trains = Train::where('data_partenza',$mytime)->get();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
