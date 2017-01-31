<?php

namespace App\Http\Controllers;

use App\Badge;
use App\PencapaianBadge;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Glossary;
use Mail;
use DB;
use Auth;
use App\PresentaseProgressVideo;

class PresentaseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        //ambil id video tabel dari id video youtube
        $id_video = NULL;
        $id_video_query = DB::table('video')
            ->select('id')
            ->where('id_video', '=', $_GET['id_video'])
            ->get();

        foreach ($id_video_query as $id_video_query_1) {
            $id_video = $id_video_query_1->id;
        }

        //cek dulu apakah id user ini sudah memiliki progress id video yg di putar
        $besaran = NULL;
        $cek = DB::table('progress_video')
            ->select('*')
            ->where('id_user', '=', $user->id)
            ->where('id_video', '=', $id_video)
            ->get();

        foreach ($cek as $cek_1) {
            $besaran = $cek_1->presentase_progress;
        }

        if (count($cek) > 0) {
            if($besaran < $_GET['presentase_progress']){
                DB::table('progress_video')
                    ->where('id_user', $user->id)
                    ->where('id_video', $id_video)
                    ->update(['presentase_progress' => $_GET['presentase_progress']]);
            }
        } else{

            $ppv = new PresentaseProgressVideo();

            $ppv->id_user = $_GET['id_user'];
            $ppv->id_video = $id_video;
            $ppv->presentase_progress = $_GET['presentase_progress'];

            $ppv->save();
        }


        $this->badge($user->id);
        $this->send_email_certificate();
    }

    public function send_email_certificate(){
        //Cek Apabila semua video memiliki presentase 100
        $video_keseluruhan = DB::table('video')
            ->get();

        $presentase_seratus = DB::table('progress_video')
            ->where('id_user','=',$user_auth->id)
            ->where('presentase_progress','=',100)
            ->get();

        $jumlah_video_keseluruhan = count($video_keseluruhan);
        $jumlah_presentase_seratus = count($presentase_seratus);

        if($jumlah_video_keseluruhan == $jumlah_presentase_seratus){//Apabila jumlah video sama dgn jumlah video yg 100 persen
            $user_auth = Auth::user();

            $user = DB::table('users')
                ->select('*')
                ->where('id','=',$user_auth->id)
                ->get();

            Mail::send('authenticated.emails.participants_certificate', ['user' => $user], function ($message){
                $user_auth = Auth::user();
                $message->from('opendatacourseperludem@gmail.com', 'Open Data Course Perludem');

                //$message->to('emilhamep@icloud.com');
                $message->to($user_auth->email);

                $message->subject("Open Data Course Certicate");
            });

            Mail::send('authenticated.emails.admin_certificate', ['user' => $user], function ($message){
                $message->from('opendatacourseperludem@gmail.com', 'Open Data Course Perludem');

                $message->to('opendatacourseperludem@gmail.com');


                $message->subject("Certicate");
            });
        }


    }

    public function badge($user){//Fungsi untuk menententukan status badge yang didapat

        $total_video = DB::table('video')
                            ->select('*')
                            ->get();

       $query_progress = DB::table('progress_video')
                        ->select('*')
                        ->where('presentase_progress',100)
                        ->where('id_user',$user)
                        ->get();
        
        if(count($query_progress) == 3){//scholar

            //di cek terlebih dahulu sudah ada atau belum
            $scholar = DB::table('pencapaian_badge')
                        ->select('*')
                        ->where('id_user',$user)
                        ->where('id_badge',2)
                        ->get();
            //cek apakah sudah dapat sebelumnya
            if(count($scholar) == 0){//belum ada
             $PencapaianBadge = new PencapaianBadge();
             $PencapaianBadge->id_user = $user;
             $PencapaianBadge->id_badge = 2;
             $PencapaianBadge->save();
            }

        }else if(count($query_progress) == 5){//master
            //di cek terlebih dahulu sudah ada atau belum
            $master = DB::table('pencapaian_badge')
                ->select('*')
                ->where('id_user',$user)
                ->where('id_badge',3)
                ->get();
            //cek apakah sudah dapat sebelumnya
            if(count($master) == 0){//belum ada
                $PencapaianBadge = new PencapaianBadge();
                $PencapaianBadge->id_user = $user;
                $PencapaianBadge->id_badge = 3;
                $PencapaianBadge->save();
            }
        }else if(count($query_progress) == count($total_video)){//professor
            //di cek terlebih dahulu sudah ada atau belum
            $professor = DB::table('pencapaian_badge')
                ->select('*')
                ->where('id_user',$user)
                ->where('id_badge',4)
                ->get();
            //cek apakah sudah dapat sebelumnya
            if(count($professor) == 0){//belum ada
                $PencapaianBadge = new PencapaianBadge();
                $PencapaianBadge->id_user = $user;
                $PencapaianBadge->id_badge = 4;
                $PencapaianBadge->save();
            }
        }else{

        }

        //cek badge untuk privacy activist
        // ->join('level', 'materi.id_level', '=', 'level.id_level')
        $pactivist = DB::table('progress_video')
                    ->join('video','progress_video.id_video','=','video.id')
                    ->select('*')
                    ->where('progress_video.presentase_progress',100)
                    ->where('progress_video.id_user',$user)
                    ->where('video.id_materi',14)
                    ->get();

        if(count($pactivist) == 6){//Jika sudah menonton ke 6 video dgn presentase 100%
            //cek terlebih dahulu apakah sudah punya badgenya?
            $activist = DB::table('pencapaian_badge')
                ->select('*')
                ->where('id_user',$user)
                ->where('id_badge',5)
                ->get();
            //cek apakah sudah dapat sebelumnya
            if(count($activist) == 0){//belum ada
                $PencapaianBadge = new PencapaianBadge();
                $PencapaianBadge->id_user = $user;
                $PencapaianBadge->id_badge = 5;
                $PencapaianBadge->save();
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
