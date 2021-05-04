<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Mahasiswas;
class MahasiswaController extends Controller
{
    public function index(){
        $data=Mahasiswas::all();
           return view('index',compact('data'));
       }
   
       public function back(){
        return redirect ('/');
       }
       
       public function create(){
        return view('create');
       }
   
       public function insert(Request $request){
        $data=new Mahasiswas();
           $data->nim=$request->get('nim');
           $data->nama_lengkap=$request->get('nama_lengkap');
           $data->jurusan=$request->get('jurusan');
           $data->save();
        return redirect ('/');
       }
   
       public function delete($id){
        $data=Mahasiswas::find($id);
           $data->delete();
           return back();
       }
   
       public function edit($id){
        $data=Mahasiswas::find($id);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $id){     
        $data = Mahasiswas::findOrFail($id);
           $data->nim=$request->get('nim');
           $data->nama_lengkap=$request->get('nama_lengkap');
           $data->jurusan=$request->get('jurusan');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
   
       public function show($id){
        $data=Mahasiswas::find($id);
        return view('show',compact('data'));
       }
}
