<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artigo;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $listaMigalhas = json_encode([
      ["titulo"=>"Admin","url"=>route('admin')]
    ]);
     $user = auth()->user();

     if($user->autor == "S" && $user->admin == "N"){
       $qtdArtigos = Artigo::where("user_id","=",$user->id)->count();
     }else{
       $qtdArtigos = Artigo::count();
     }
     $qtdUsuarios = User::count();
     $qtdAutores = User::where("autor","=","S")->count();
     $qtdAdmin = User::where("admin","=","S")->count();

     return view('admin',compact('listaMigalhas','qtdArtigos','qtdUsuarios','qtdAutores','qtdAdmin'));
   }
 }
