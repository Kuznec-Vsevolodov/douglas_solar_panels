<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('models');
    }

    public function addModel()
    {
        return view('add_model');
    }

    public function editModel($id){
        return view('edit_model')->with('id', $id);
    }

    public function getModelData($id){
         
    }

    public function getModelsList(){
        
    }

    public function addNewModel(Request $request){

    }

    public function editModelData(Request $request){

    }
}
