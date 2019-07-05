<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tugas;

class tugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas =tugas::all();
        // $Response =[
        //         "success" => true,
        //         "data"=> $tugas,
        //         "message"=>"berhasil"
        // ];
        return Response()->json($tugas,200);
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
        $tugas = new tugas();
        $tugas->nama = $request->nama;
        $tugas->umur = $request->umur;
        $tugas->alamat = $request->alamat;
        $tugas->hobby = $request->hobby;
        $tugas->save();
            $Response =[
               "success" => true,
               "data"=> $tugas,
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
        $tugas =tugas::findOrFail($id);
         $Response =[
                "success" => true,
                 "data"=> $tugas,
                 "message"=>"berhasil"
         ];
        return Response()->json($tugas,200);
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
       $tugas = tugas::findOrFail($id);
        $tugas->nama = $request->nama;
        $tugas->umur = $request->umur;
        $tugas->alamat = $request->alamat;
        $tugas->hobby = $request->hobby;
        $tugas->save();
            $Response =[
               "success" => true,
               "data"=> $tugas,
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
         $tugas =tugas::findOrFail($id)->delete;
         $Response =[
                "success" => true,
                 "data"=> $tugas,
                 "message"=>"berhasil"
         ];
        return Response()->json($tugas,200);
    }
}
