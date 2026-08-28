<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function create(){
        return view('client.create');
    }

    public function store(Request $request){
        Client::create($request->all());
        dd("CADASTRADO COM SUCESSO");
    }

    public function index(){
        dd(Client::all());
    }
}
 

