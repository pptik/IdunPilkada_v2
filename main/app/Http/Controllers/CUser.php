<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\MComment;
use Mail;

class CUser extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function send_email(){
		$user_auth = Auth::user();
		
		$user = DB::table('users')
				->select('*')
				->where('id','=',$user_auth->id)
				->get();

        $peserta = Mail::send('authenticated.emails.participants_certificate', ['user' => $user], function ($message){
			$user_auth = Auth::user();
            $message->from('opendatacourseperludem@gmail.com', 'Open Data Course Perludem');

            //$message->to('emilhamep@icloud.com');
			$message->to($user_auth->email);
			
			$message->subject("Open Data Course Certicate");
        });
		
		$admin = Mail::send('authenticated.emails.admin_certificate', ['user' => $user], function ($message){
            $message->from('opendatacourseperludem@gmail.com', 'Open Data Course Perludem');

            $message->to('opendatacourseperludem@gmail.com');
			
			
			$message->subject("Certicate");
        });
		if($peserta==TRUE && $admin==TRUE){
			return "Sent";
		}else{
			return "Fail";
		}
	}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function random_string($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    public function foto(Request $data)
    {
        $validation = Validator::make($data->all(), array(
            'photo' => 'required|mimes:jpg,jpeg,png|Max:300',
        ));

        if ($validation->fails()) {
            return Redirect::to('ubah-profile')->withErrors($validation);
            //return "gagal upload kena validasi";
        } else {

            $foto = $data->file('photo');
            $destinasi = 'main/resources/assets/images/user_profiles/';

            $nama = $foto->getClientOriginalName();
            //ubah file dengan random string
            $rename_berkas_foto = $this->random_string(50) . '.' . $foto->getClientOriginalExtension();

            $berhasil = $foto->move($destinasi, $rename_berkas_foto);


            if ($berhasil) {
                $user = Auth::user();


                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['path_image' => 'main/resources/assets/images/user_profiles/' . $rename_berkas_foto]);

                return Redirect::to('ubah-profile');
            } else {
                return Redirect::to('ubah-profile');
                //return "gagal upload";
            }
        }


    }

    public function email()
    {
        $user = Auth::user();

        DB::table('users')
            ->where('id', $user->id)
            ->update(['email' => $_POST['email']]);

        return Redirect::to('ubah-profile');
    }

    public function bio()
    {
        $user = Auth::user();

        DB::table('users')
            ->where('id', $user->id)
            ->update(['bio' => $_POST['bio']]);

        return Redirect::to('ubah-profile');
    }

    //Bagian forum
    public function addcomment()
    {


        $user = new MComment();


        //masuk ke tabel user
        $user->id_materi = $_POST['id_materi'];
        $user->id_user = $_POST['id_user'];
        $user->isi_komentar = $_POST['isi_komentar'];
        $user->save();




    }
    public function addsubcomment()
    {

        $user = new MComment();


        //masuk ke tabel user
        $user->id_materi = $_POST['id_materi'];
        $user->id_user = $_POST['id_user'];
        $user->id_top_komentar = $_POST['id_top_komentar'];
        $user->isi_komentar = $_POST['isi_sub_komentar'];
        $user->save();
    }
    public function addsubsubcomment()
    {

        $user = new MComment();


        //masuk ke tabel user
        $user->id_materi = $_POST['id_materi'];
        $user->id_user = $_POST['id_user'];
        $user->id_top_komentar = $_POST['id_top_komentar'];
        $user->id_top_sub_komentar = $_POST['id_top_sub_komentar'];
        $user->isi_komentar = $_POST['isi_komentar'];
        $user->save();
    }
    public function isikomentar($id)
    {


        $komen = DB::table('komentar')
            ->select('*','users.path_image as path_image_user')
            ->join('users', 'komentar.id_user', '=', 'users.id')
            ->where('id_materi','=',$id)
            ->where('id_top_komentar','=',0)
            //->where('users.id',$user->id)
            ->orderBy('id_komentar', 'desc')
            ->get();
        $subkomen = DB::table('komentar')
            ->select('*','users.path_image as path_image_user')
            ->join('users', 'komentar.id_user', '=', 'users.id')
            ->where('id_materi','=',$id)
            ->where('id_top_komentar','!=',0)
            ->where('id_top_sub_komentar','=',0)
            //->where('users.id','=',$user->id)
            ->orderBy('id_komentar', 'desc')
            ->get();
        $subsubkomen = DB::table('komentar')
            ->select('*','users.path_image as path_image_user')
            ->join('users', 'komentar.id_user', '=', 'users.id')
            ->where('id_materi','=',$id)
            ->where('id_top_sub_komentar','!=',0)
            ->orderBy('komentar.created_at', 'asc')
            ->get();
        return view('authenticated.isikomentar')
            ->with('subsubkomen',$subsubkomen)
            ->with('subkomen',$subkomen)
            ->with('komen',$komen);



    }
    public function tesisikomentar($id)
    {
        $komen = DB::table('komentar')
            ->select('*')
            ->join('user', 'komentar.id_user', '=', 'user.id_user')
            ->where('id_materi','=',2)
            ->where('id_top_komentar','=',0)
            ->orderBy('id_komentar', 'desc')
            ->get();
        $subkomen = DB::table('komentar')
            ->select('*')
            ->join('user', 'komentar.id_user', '=', 'user.id_user')
            ->where('id_materi','=',2)
            ->where('id_top_komentar','!=',0)
            ->where('id_top_sub_komentar','=',0)
            ->orderBy('id_komentar', 'desc')
            ->get();
        $subsubkomen = DB::table('komentar')
            ->select('*')
            ->join('user', 'komentar.id_user', '=', 'user.id_user')
            ->where('id_materi','=',2)
            ->where('id_top_sub_komentar','!=',0)
            ->orderBy('id_komentar', 'desc')
            ->get();
        return view('tesisikomentar')
            ->with('subsubkomen',$subsubkomen)
            ->with('subkomen',$subkomen)
            ->with('komen',$komen);



    }
    public function deletecomment()
    {
        DB::table('komentar')
            ->where('id_top_komentar', '=', $_POST['id_komentar'])
            ->delete();
        DB::table('komentar')
            ->where('id_komentar', '=', $_POST['id_komentar'])
            ->delete();

    }
    public function deletesubcomment()
    {
        DB::table('komentar')
            ->where('id_top_sub_komentar', '=', $_POST['id_komentar'])
            ->delete();
        DB::table('komentar')
            ->where('id_komentar', '=', $_POST['id_komentar'])
            ->delete();

    }
    public function deletesubsubcomment()
    {
        DB::table('komentar')
            ->where('id_komentar', '=', $_POST['id_komentar'])
            ->delete();

    }
}
