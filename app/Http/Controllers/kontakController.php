<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class kontakController extends Controller
{
    //
    function show(){
        $data['kontak'] = kontak::all();
        return view('kontak',$data);
    }

    function delete($item){
        $kontak = kontak::where('id', $item)->first();
        $kontak->delete();
        return redirect('kontak');
    }

    function create(Request $eg){
        // $this->validate($eg ,[
        //     'nis'=>'required|min:8',
        //     'nama'=>'required|min:8',
        //     'foto'=>'mimes:png,jpg'
        // ]);

       kontak::create([
            'nama'=>$eg->nama,
            'email'=>$eg->email,
            'pesan'=>$eg->pesan
        ]);
        return redirect('portofolio');
    }
}
