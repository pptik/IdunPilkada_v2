<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;

class BadgeAchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        $last_badge = DB::table('pencapaian_badge')
            ->select('badge.path_image as badge', 'badge.deskripsi as deskripsi','badge.syarat as syarat')
            ->join('badge', 'badge.id', '=', 'pencapaian_badge.id_badge')
            ->orderBy('pencapaian_badge.created_at', 'desc')
            ->where('pencapaian_badge.id_user', '=', $user->id)
            ->take(1)
            ->get();

        /*$badges_achivement_yet = DB::table('pencapaian_badge')
                            ->select('badge.path_image as badge')
                            ->join('badge','badge.id','=','pencapaian_badge.id_badge')
                            ->where('pencapaian_badge.id_badge','!=','badge.id')
                            ->where('pencapaian_badge.id_user','=',$user->id)
                            ->get();*/

        

        $badges_achivement_yet = DB::table('badge')
            ->select('*')
            ->whereNotIn('id',function ($q) {
                $user = Auth::user();
                $q->select('id_badge')
                    ->from('pencapaian_badge')
                    ->where('id_user','=',$user->id);
                
            })
            ->get();

        $last_badges = DB::table('pencapaian_badge')
            ->select('badge.path_image as badge', 'badge.deskripsi as deskripsi','badge.syarat as syarat')
            ->join('badge', 'badge.id', '=', 'pencapaian_badge.id_badge')
            ->orderBy('pencapaian_badge.created_at', 'desc')
            ->where('pencapaian_badge.id_user', '=', $user->id)
            ->where('badge.status', '=', 1)
            ->take(1)
            ->get();

        $badges_achivement = DB::table('badge')
            ->select('badge.path_image as path_image','badge.syarat as syarat','badge.deskripsi as deskripsi')
            ->join('pencapaian_badge', 'pencapaian_badge.id_badge', '=','badge.id' )
            ->orderBy('pencapaian_badge.created_at', 'asc')
            ->where('pencapaian_badge.id_user', '=', $user->id)
            ->get();

        return view('authenticated.dashboard.lencana', ["badges_achivement_yet" => $badges_achivement_yet, 
            "last_badge" => $last_badge,"last_badges" => $last_badges,"badges_achivement" => $badges_achivement]);

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
