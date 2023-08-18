<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

   public function teste(Request $request)
   {
        return redirect()->route('sucesso');
   }

   public function testesucesso(Request $request)
   {
        echo 'essa rota foi redirecionada';
   }

   public function usuario(Request $request)
   {
        //echo $request->id;
        if (isset($request->id)) {
            echo "Este é o usuario {$request->id}";
        }else {
            echo "este usuario é novo";
        }
   }

   public function pagina404(Request $request)
   {
    echo 'pagina não encontrada';
   }

   public function testes(Request $request)
   {
        return redirect()->route('sucesso');
   }
}
