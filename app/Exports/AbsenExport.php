<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsenExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'Nama',
            'Kehadiran',
            'Tanggal',
            'Jam_masuk',
            'jam_keluar',
        ];
    }
    public function query()
    {
        $bulan = date('m');
        $tahun = date('Y');
        // dd($tahun);

        $absen = User::select('users.nama as user', 'status_absens.nama', 'absens.tanggal', 'status_absens.nama','detail_absens.jam_masuk','detail_absens.jam_keluar')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
         ->join('status_absens', 'status_absens.id', '=', 'absens.status_absen_id')
        ->whereYear('tanggal', '=', $tahun)
        ->whereMonth('tanggal', '=', $bulan)
        ->latest();
        // ->get();
        // dd($absen);
        return $absen;
    }
}