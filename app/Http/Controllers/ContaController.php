<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

    //cadastrar no banco de dados uma nova conta
class ContaController extends Controller
{
    //Listar contas
    public function index()
    {
        
        return view('contas.index');
    }

    //detalhes da conta
    public function create()
    {
        
        return view('contas.create');
    }

    //carregar o formulario e cadastrar uma nova conta
    public function store(Request $request)
    {
        
        dd($request->nome);
    }

     //cadastrar no banco de dados uma nova conta 
     public function show()
     {
         
         return view('contas.show');
     }

      //caregar o formulario e editar conta
      public function edit()
      {
          
          return view('contas.edit');
      }

       //editar no banco de dados a conta
       public function update()
       {
           
           dd("Editar");
       }
        //excluir a conta no banco de dados
        public function destroy()
        {
            
            dd('apagar');
        }

    
}
