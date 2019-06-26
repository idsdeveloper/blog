<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_siswa as t_siswa;
use App\tbl_hobi as t_hobi;
use App\tbl_jurusan;
use App\tbl_guru as t_guru;

class gilunkcontrol extends Controller
{
    // untuk siswa
    function list(){
        $data = t_siswa::select('nis', 'nama_siswa', 'jk_siswa','id_jurusan','agama_siswa','id_hobi')->with(['hobi', 'jurusan'])->orderBy('nama_siswa','desc')->get();
        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }

    function getHobiSiswa(){
        $data = t_siswa::find($nis);
        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }

    function getbyid(Request $request, $id){
        // Use laravel eloquent
        $data = t_hobi::with(['siswa', 'jurusan'])->find($id);
        // Manual Code
        // $data = t_hobi::find($id);
        // $dataSiswa = t_siswa::where('id_hobi',$data['id_hobi'])->get();

        // $newData = $data;
        // $newData['dataSiswa'] = $dataSiswa;

        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }

    function create(Request $request){

        $post = t_siswa::create([
            'nama_siswa' => $request['nama_siswa'],
            'jk_siswa' => $request['jk_siswa'],
            'id_jurusan' => $request['id_jurusan'],
            'alamat_siswa'=> $request['alamat_siswa'],
            'agama_siswa' => $request['agama_siswa'],
            'id_hobi' => $request['id_hobi']
        ]);

        return response()->json([
            "status" => 200,
            "data" => $post
        ]);
    }

    function update(Request $request, $nis){

        $put = t_siswa::find($nis);

        $put->nama_siswa = $request['nama_siswa'];
        $put->jk_siswa = $request['jk_siswa'];
        $put->id_jurusan = $request['id_jurusan'];
        $put->alamat_siswa = $request['alamat_siswa'];
        $put->agama_siswa = $request['agama_siswa'];
        $put->id_hobi = $request['id_hobi'];

        $put->save();
        return response()->json([
            "status" => 200,
            "data" => $put
        ]);
    }

    function delete(Request $request, $nis){
        $delete = t_siswa::find($nis);

        $delete->delete();

        return response()->json([
            "status" => 200,
            "data" => $delete
        ]);
    }

    //untuk guru
    function listguru(){
        $data = t_guru::select('id_guru', 'nama_guru','id_jurusan','no_telp','alamat_guru')->with(['jurusan'])->get();
        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }

    function getbyidguru(Request $request, $id){
        $data = t_guru::with(['jurusan'])->find($id);

        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }
    function createguru(Request $request){

        $post = t_guru::create([
            'id_guru' => $request['id_guru'],
            'nama_guru' => $request['nama_guru'],
            'id_jurusan' => $request['id_jurusan'],
            'no_telp' => $request['no_telp'],
            'alamat_guru'=> $request['alamat_siswa']
        ]);

        return response()->json([
            "status" => 200,
            "data" => $post
        ]);
    }
    function updateguru(Request $request, $id_guru){

        $put = t_guru::find($id_guru);

        $put->nama_guru = $request['nama_guru'];
        $put->id_jurusan = $request['id_jurusan'];
        $put->no_telp = $request['no_telp'];
        $put->alamat_guru = $request['alamat_guru'];

        $put->save();
        return response()->json([
            "status" => 200,
            "data" => $put
        ]);
    }

    function deleteguru(Request $request, $id_guru){
        $delete = t_guru::find($id_guru);

        $delete->delete();

        return response()->json([
            "status" => 200,
            "data" => $delete
        ]);
    }
}
