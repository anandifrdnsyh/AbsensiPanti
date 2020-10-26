<?php

namespace App\Http\Controllers\User;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $bulan = date('m');

        $user =  User::where('id', Auth::id())->first();

        $detailkehadiran =  Absen::where('user_id', Auth::id())->where('status_absen_id', 1)->whereMonth('tanggal', $bulan)->count();
        $detailtidakhadir =  Absen::where('user_id', Auth::id())->where('status_absen_id', 2)->whereMonth('tanggal', $bulan)->count();
        $detailsakit =  Absen::where('user_id', Auth::id())->where('status_absen_id', 3)->whereMonth('tanggal', $bulan)->count();
        $detailcuti =  Absen::where('user_id', Auth::id())->where('status_absen_id', 4)->whereMonth('tanggal', $bulan)->count();
        // dd($detailcuti);


        $this->pageTitle = 'dashboard';

        return view('user.Dashboard',compact('user', $user), $this->withDashboardData([
            'detailkehadiran' => $detailkehadiran,
            'detailtidakhadir' => $detailtidakhadir,
            'detailcuti' => $detailcuti,
            'detailsakit' => $detailsakit,
        ]));
    }
}
