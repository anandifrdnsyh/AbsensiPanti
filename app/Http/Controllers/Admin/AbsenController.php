<?php

namespace App\Http\Controllers\Admin;

use App\Models\Absen;
use App\Models\DetailAbsen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', 2)->get();
        // dd($user);
        $i = 1;
        $this->pageTitle = 'Absen';

        return view('Admin.Absen.home', $this->withDashboardData([
            'dataUser' => $user,
            'i' => $i
        ]));
    }

    public function detailAbsen(Request $request)
    {
        // dd($request->id);
        $user = User::where('id', $request->id )->first();
        // dd($user->id);
        $i = 1;
        $absens = DB::table('users')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
        ->where('users.id', $request->id)
        ->get();
        // dd($absens);

        $this->pageTitle = 'Laporan Absen';

        return view('Admin.Absen.detail', $this->withDashboardData([
            'absens' => $absens,
            'i' => $i,
            'user' =>$user,
        ]));

    }

    public function store(Request $request)
    {
        // dd($request->id);
        $user = User::where('id', $request->id)->first();
        // dd($request->id);
        $absens = DB::table('users')
        ->join('absens', 'absens.user_id', '=', 'users.id')
        ->join('detail_absens', 'detail_absens.absen_id', '=', 'absens.id')
        ->where('users.id', $request->id)
        ->get();
        // ->first();
        // dd($absens);
        return view('Admin.Absen.showAbsen', $this->withDashboardData([
            'absens' => $absens,
            'user' => $user,
        ]));

    }

    public function create(Request $request)
    {
        $absenn = Absen::create([
            'user_id' => $request->user,
            'status_absen_id' => $request->status,
            'tanggal' => $request->tanggal,
        ]);

        $detailabsen = DetailAbsen::create([
            'user_id' => $request->user,
            'absen_id' => $absenn->id,
        ]);
        // dd($detailabsen);
        session()->flash('success', 'Update Successfully');
        return redirect()->route('admin.absen');
    }
}
