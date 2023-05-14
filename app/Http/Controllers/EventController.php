<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class EventController extends Controller
{
    public function storeUser(Request $request){

        $password = $request->password;

        $query = User::where('email', $request->email)->where('name', $request->name)->first();


        if(isset($query->password) && Hash::check($password, $query->password)){
            return response()->json([
                'success' => true,
                'message' => "Login feito com sucesso",
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Dados incorrectos",
            ]);
        }
        
    }

    public function storeUser2(Request $request){
        $query = User::where('email', $request->email)->where('name', $request->name)->first();

        if(isset($query->password) && Hash::check($request->password, $query->password)){
            return response()->json([
                'success' => true,
                'message' => "Login feito com sucesso",
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Erro",
            ]);
        }
    }
}
