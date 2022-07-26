<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function users()
    {
        return view('users');
    }

    public function editUserForm($id){
        return view('edit_user')->with('id', $id);;
    }

    public function models(){
        return view('models_admin');
    }

    public function getUsers(){

    }

    public function editUser(Request $request){

    }

    public function getModels(){

    }
}
