<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    //

    function show(){
        $data['portofolio'] = portofolio::all();
        return view('viewportofolio',$data);
    }


    function add(){
        $data=[
            'action'=>url('viewpo/create'),
            'tombol'=>'simpan',
            'portofolio'=>(object)[
                'id'=>'',
                'namaPortofolio'=>'',
                'kategori'=>'',
                'Deskripsi'=>'',
                'foto'=>''
            ]
        ];
        return view('formPortofolio',$data);
    }

    function create(Request $eg){
        // $this->validate($eg ,[
        //     'nis'=>'required|min:8',
        //     'nama'=>'required|min:8',
        //     'foto'=>'mimes:png,jpg'
        // ]);

        portofolio::create([
            'id' =>$eg->item,
            'namaPortofolio'=>$eg->namaPortofolio,
            'kategori'=>$eg->kategori,
            'Deskripsi'=>$eg->Deskripsi,
            'foto'=>$eg->file('foto')->store('photoPortofolio')
        ]);
        return redirect('viewpo');
    }

    function delete($item){
        $portofolio = portofolio::where('id', $item)->first();
        $portofolio->delete();
        Storage::delete($portofolio->foto);
        return redirect('viewpo');
    }

    function edit($item){
        $data['portofolio']=Portofolio::find($item);
        $data['action']= url('viewpo/update').'/'.$data['portofolio'] -> id;
        $data['tombol']='update';
        return view('formPortofolio',$data);
    }

    function update(Request $req){
        if ($req->file('foto')){
            $portofolio = Portofolio::where('id',$req->id)->first();
            Storage::delete($portofolio -> foto);
            

            $file = $req->file('foto')->store('photoPortofolio');
        }else{
            $file=DB::raw('photoPortofolio');
        }

        Portofolio::where('id',$req->id)->update([
            'namaPortofolio' => $req -> namaPortofolio,
            'kategori' => $req -> kategori,
            'Deskripsi'=> $req -> Deskripsi,
            'foto'=> $file
        ]);
        return redirect('viewpo');
    }
}
