<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class NilaiController extends Controller
{
    //
    function pretest_submit(){
        $nilai = new Nilai();
        $nilai->id_materi=$_POST['id_materi'];
        $nilai->id_user=$_POST['id_user'];
        $nilai->nilai=$_POST['nilai'];
        $nilai->nilai_maksimum=$_POST['nilai_maksimum'];
        $nilai->jenis=1;
        $nilai->save();


        $nama_materi = NULL;
        $query_nama_materi = DB::table('materi')
            ->select('judul')
            ->where('id_materi', '=', $_POST['id_materi'])
            ->get();

        foreach ($query_nama_materi as $query_nama_materi_1) {
            $nama_materi = $query_nama_materi_1->judul;
        }

        return Redirect::to('silabus/'.str_replace(' ', '-', strtolower($nama_materi)).'');
        

    }
    function posttest_submit(){
        $nilai = new Nilai();
        $nilai->id_materi=$_POST['id_materi'];
        $nilai->id_user=$_POST['id_user'];
        $nilai->nilai=$_POST['nilai'];
        $nilai->nilai_maksimum=$_POST['nilai_maksimum'];
        $nilai->jenis=2;
        $nilai->save();


        $nama_materi = NULL;
        $query_nama_materi = DB::table('materi')
            ->select('judul')
            ->where('id_materi', '=', $_POST['id_materi'])
            ->get();

        foreach ($query_nama_materi as $query_nama_materi_1) {
            $nama_materi = $query_nama_materi_1->judul;
        }

        return Redirect::to('silabus/'.str_replace(' ', '-', strtolower($nama_materi)).'');


    }
}
