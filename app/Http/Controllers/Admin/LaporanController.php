<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AbsenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $absens = DB::table('users')
        ->select('users.nama as user', 'users.email', 'absens.status_absen_id', 'absens.tanggal', 'status_absens.nama', 'detail_absens.jam_masuk', 'detail_absens.jam_keluar')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
        ->join('status_absens', 'status_absens.id', '=', 'absens.status_absen_id')
        ->latest()
        ->get();
        // dd($absens);
        $a = 1;

        $this->pageTitle = 'Laporan Absen';

        return view('Admin.Laporan.index', $this->withDashboardData([
            'absens' => $absens,
            'a' => $a,
        ]));
    }

    public function filterAbsen(Request $request)
    {
        $a=1;
        $bulan = $request->get('month');
        $tahun = $request->get('year');

        $absens = DB::table('users')
        ->select('users.nama as user', 'users.email', 'absens.status_absen_id', 'absens.tanggal', 'status_absens.nama', 'detail_absens.jam_masuk', 'detail_absens.jam_keluar')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
         ->join('status_absens', 'status_absens.id', '=', 'absens.status_absen_id')
         ->whereYear('tanggal', '=', $tahun)
        ->whereMonth('tanggal', '=', $bulan)
        ->latest()
        ->get();
        // dd($absens);
        return view('Admin.Laporan.index', $this->withDashboardData([
            'absens' => $absens,
            'a' => $a,
        ]));

    }

    public function exportexcel()
    {
        return (new AbsenExport)->download('absen.xlsx');
    }
}
