<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        $Response =[
                "success" => true,
                "data"=> $sekolah,
                "message"=>"berhasil"
        ];
        return response()->json($Response,200);
        
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $sekolah = new Sekolah();
        $sekolah->kepalasekolah = $request->kepalasekolah;
        $sekolah->namaguru = $request->namaguru;
        $sekolah->namasiswa = $request->namasiswa;
        $sekolah->kelas = $request->kelas;
        $sekolah->ruang = $request->ruang;
        $sekolah->save();
            $Response =[
               "success" => true,
               "data"=> $sekolah,
               "message"=>"berhasil"
         ];
        return response()->json($Response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $sekolah = Sekolah::findOrFail($id);
         $Response =[
                "success" => true,
                 "data"=> $sekolah,
                 "message"=>"berhasil"
         ];
        return Response()->json($Response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $sekolah = Sekolah::findOrFail($id);
        $sekolah->kepalasekolah = $request->kepalasekolah;
        $sekolah->namaguru = $request->namaguru;
        $sekolah->namasiswa = $request->namasiswa;
        $sekolah->kelas = $request->kelas;
        $sekolah->ruang = $request->ruang;
        $sekolah->save();
            $Response =[
               "success" => true,
               "data"=> $sekolah,
               "message"=>"berhasil"
         ];
        return response()->json($Response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sekolah = Sekolah::findOrFail($id)->delete;
         $Response =[
                "success" => true,
                 "data"=> $sekolah,
                 "message"=>"berhasil"
         ];
        return Response()->json($Response,200);
    }
}
