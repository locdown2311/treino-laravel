<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; //Importação do Model User padrão do Laravel
class ExampleController extends Controller
{
    public function FuncaoExamplo()
    {
        $user = User::all();
        return response()->json($user);
    }
}
