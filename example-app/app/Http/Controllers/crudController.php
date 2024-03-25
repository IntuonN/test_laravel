<?php

namespace App\Http\Controllers;
use App\Models\titlesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['titles'] = titlesModel::all();
        return view('crud',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//แสดงข้อมูลจากฐานข้อมูล
    {
        $name =  $request -> input("name");
        $pin =  $request -> input("pin");

        $titlesModel = new titlesModel();

        $titlesModel -> tit_name = $name;
        $titlesModel -> tit_pin = $pin;

        $titlesModel -> save();

        return Redirect::to("/customer");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)//แสดงข้อมูลราย id
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//แสดงหน้าแก้ไขข้อมูลราย id
    {
        $tit_data = titlesModel::find($id);
        if($tit_data === null){
            return redirect('/customer');
        }else{
            return view("edit",compact("tit_data"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//แก้ข้อมูลราย id
    {
        $name = $request -> input("name");
        $pin = $request -> input("pin");

        $tit_data = titlesModel::find($id);

        $tit_data -> tit_name = $name;
        $tit_data -> tit_pin = $pin;

        $tit_data -> save();

        return redirect("/customer");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tit_data = titlesModel::find($id);

        $tit_data -> delete();

        return redirect('/customer');
    }
}
