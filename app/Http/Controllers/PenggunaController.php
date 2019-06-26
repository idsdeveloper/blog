<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table_user as Mod_Pengguna;
use App\table_guru as Mod_Guru;
use App\table_soal as Mod_Soal;
use App\table_subject as Mod_Subject;

class PenggunaController extends Controller
{
    function list(){
        $data = Mod_Pengguna::select('id','username','name')->orderBy('username','desc')->get();
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
    function getById(Request $request, $id ){
        $data = Mod_Pengguna::find($id);
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }

    function create(Request $request){

        $post = Mod_Pengguna::create([
            'Username' => $request['Username'],
            'Name' => $request['Name'],
            'Sex' => $request['Sex'],
            'BirthDate' => $request['BirthDate']
        ]);
        
        return response()->json([
            'status' => 200,
            'data' => $post
        ]);

    }

    function update(Request $request, $id){
        $put = Mod_Pengguna::find($id);

        $put->Username = $request['Username'];
        $put->Name =  $request['Name'];
        $put->Sex = $request['Sex'];
        $put->BirthDate = $request['BirthDate'];

       $put->save();

        return response()->json([
            'status' => 200,
            'data' => $put
        ]);
    }

    function delete(Request $request, $id){
        $delete = Mod_Pengguna::find($id);

        $delete->delete();

        return response()->json([
            'status' => 200,
            'data' => $delete
        ]);
    }

    function tampilguru(Request $request, $id){
        $table_guru = Mod_Guru::find($id);

        return response()->json([
            'status' => 200,
            'data' => $table_guru
        ]);
    }

    function getSoalById(Request $request, $id){
        $table_subject = Mod_Subject::find($id)->getdatasoal;       
        return response()->json([
            'status' => 200,
            'data' => $table_subject
        ]);
    }

    function getSoal(Request $request){
        $table_soal = Mod_Soal::with(['subject'])->get();       
        return response()->json([
            'status' => 200,
            'data' => $table_soal
        ]);
    }
}
