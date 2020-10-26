<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        // $absen =  Absen::where('user_id', Auth::id())->get();

        $absens = DB::table('users')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
        ->where('users.id', Auth::id())
        ->get();

        $i = 1;

        $this->pageTitle = 'Laporan Absen';

        return view('User.Laporan.index', $this->withDashboardData([
            'absens' => $absens,
            'i' => $i,
        ]));
    }

    public function store()
    {
        return view('User.Laporan.indexTambah', $this->withDashboardData([
        ]));
    }
}
