<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\Portofolio;

class profileCont extends Controller
{
    //
    function show()
    {
        $data['profile'] = profile::all();
        $data['portofolio'] = portofolio::all();
        return view('portofolio', $data);
    }


    function profile()
    {
        $data['profile'] = profile::first();
        return view('formProfile',$data);
    }

    // function add(){
    //     return view('formProfile');
    // }


    function add(){
        $data=[
            'action' => url('profile/create'),
            'tombol' => 'simpan',
            'profile' => (object)[
                'id'=>'',
                'nama' => '',
                'status' => '',
                'jenisKelamin' => '',
                'alamat' => '',
                'tempatLahir' => '',
                'tanggalLahir' => '',
                'fbAccount' => '',
                'igAccount' => '',
                'about' => '',
                'foto' => ''
            ]
        ];
        return view('formProfile',$data);
    }

    function create(Request $eg)
    {

        profile::create([
            'nama' => $eg->nama,
            'status' => $eg->status,
            'jenisKelamin' => $eg->jk,
            'alamat' => $eg->alamat,
            'tempatLahir' => $eg->tempatLahir,
            'tanggalLahir' => $eg->tanggalLahir,
            'fbAccount' => $eg->fb,
            'igAccount' => $eg->ig,
            'about' => $eg->about,
            'foto' => $eg->file('foto')->store('photo')
        ]);
        return view('home');
    }

    function delete($item)
    {
        $profile = profile::where('id', $item)->first();
        $profile->delete();
        Storage::delete($profile->foto);
        return redirect('');
    }

    function edit($item)
    {
        $data['profile'] = Profile::find($item);
        $data['action'] = url('profile/update') . '/' . $data['profile']->id;
        $data['tombol'] = 'update';
        return view('formProfile',$data);
    }

    function update(Request $req)
    {
        if ($req->file('foto')) {
            $profile = Profile::where('id', $req->item)->first();
            Storage::delete($profile->foto);

            $file = $req->file('foto')->store('photo');
        } else {
            $file = DB::raw('foto');
        }

        Profile::where('id', $req->item)->update([
            'nama' => $req->nama,
            'status' => $req->status,
            'jenisKelamin' => $req->jk,
            'alamat' => $req->alamat,
            'tempatLahir' => $req->tempatLahir,
            'tanggalLahir' => $req->tanggalLahir,
            'fbAccount' => $req->fb,
            'igAccount' => $req->ig,
            'about' => $req->about,
            'foto' => $file
        ]);
        return redirect('portofolio');
    }
}
