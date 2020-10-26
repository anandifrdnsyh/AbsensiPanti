<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use QRCode;

class UsersUserController extends Controller
{
    public function index()
    {
        $user = User::where('role_id', 2)->get();
        $i=1;
        $this->pageTitle = 'User Admin';
        return view('Admin.Users.User', $this->withDashboardData([
            'dataUser' => $user,
            'i' =>$i
        ]));
    }

    public function create()
    {
      $this->pageTitle = 'Registet';
        return view('Admin.Users.Register', $this->withDashboardData());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'email' => 'required|email|unique:users',
            'telphon' => 'required',
            'alamat' => 'required',
            'password' =>  'min:6|required_with:konfirmasipassword|same:konfirmasipassword',
            'konfirmasipassword' => 'min:6',
        ]);


            $user = User::where('id', 2);

            if ($user) {
                $user = User::create([
                'role_id' => 2,
                'nama' => $request->nama,
                'email' => $request->email,
                'telphon' => $request->telphon,
                'alamat' => $request->alamat,
                'password' => Hash::make($request->password),
                'kode' => $request->kode,
            ]);
            }
            $QRCode = "images/".$user->kode.'Qr-Code.png';
            QRCode::text($user->kode)
            ->setSize(8)
            ->setMargin(2)
            ->setOutFile($QRCode)
            ->png();

        $user->update([
            'qrcode' => $QRCode,
        ]);

        session()->flash('success', 'User Create Successfully');
        return redirect()->back();
    }

    public function edit($id)
    {
        $users = User::find($id);

        $this->pageTitle = 'Edit User';
        return view('admin.users.UserEdit', $this->withDashboardData([
            'dataUser' => $users,
            'routeURL' => 'admin.editTerapis',
        ]));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'email' => 'required|email',
            'telphon' => 'required',
            'alamat' => 'required',
            'password' =>  'min:6|required_with:konfirmasipassword|same:konfirmasipassword',
            'konfirmasipassword' => 'min:6',
        ]);

        $user = User::find($request->id);

        $user->update([
            'role_id' => 2,
            'nama' => $request->nama,
            'email' => $request->email,
            'telphon' => $request->telphon,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'kode' => $request->kode,
        ]);

        session()->flash('success', 'Update Successfully');
        return redirect()->back();
    }
}
