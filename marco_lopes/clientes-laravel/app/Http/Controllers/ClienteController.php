<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClienteController extends Controller
{
    public function index (){

        $client = Client::get();
        return view('client.index',[
            'client'=> $client
        ]);
    }

    public function show(int $id){
        $client = Client::find($id);//find vai buscar na tabela com o parâmetro id
        return view('client.show', [
            'client' => $client
        ]);
    }
}


