<?php

namespace App\Http\Controllers\User;

use App\Models\Absen;
use App\Models\DetailAbsen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    public function index(){

        $user = User::where('id', Auth::id())->first();

        $this->pageTitle = "Absen";

        return view('User.Absen.absenUser', $this->withDashboardData([
            'user' => $user,
            ]));
    }

    public function create(Request $request)
    {
        $user = User::where('kode', $request->kode)->first();
        $Loginuser = User::where('id', Auth::id())->first();
        // dd($Loginuser->kode);
        $tanggal = date("Y-m-d H:i:s");
        $jam  = date("G:i:s");

        $absen = Absen::whereDate('tanggal', date('Y-m-d'))->where('user_id', Auth::id())->get()->first();
        $absencek = Absen::where('user_id', Auth::id())->whereDate('tanggal', date('Y-m-d'))->get()->first();
        $detailabsen = DetailAbsen::where('user_id', Auth::id())->get()->first();

        if($user->kode == $Loginuser->kode) {
            if (empty($absen)) {
                if ($user) {
                    $absenn = Absen::create([
                        'user_id' => $request->id,
                        'status_absen_id' => 1,
                        'tanggal' => $tanggal,
                    ]);
                    $detailabsen = DetailAbsen::create([
                        'user_id' => $request->id,
                        'absen_id' => $absenn->id,
                        'jam_masuk' => $jam,
                    ]);
                    session()->flash('success', 'Karyawan berhasil melakukan Absen Masuk!');
                }
            }
            if ($detailabsen->jam_keluar == null && $absencek) {
                DetailAbsen::where('absen_id', $detailabsen->absen_id)->update(['jam_keluar' => $jam]);
                session()->flash('success', 'Karyawan berhasil melakukan Absen Keluar!');
            }
            session()->flash('warning', 'Absen Hanya Satu Kali Sehari !');
        }else{
            session()->flash('warning', 'tidak sama');
        }

        return redirect()->route('user.dashboard');
    }
}
