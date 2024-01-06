<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserServiceController extends Controller
{
    //Función que trae toda la data de los usuarios
    public function index()
    {
        $users = User::paginate(10);
        //dd($users);
        return response()->json($users);
    }
    //Función que trae usuario por id
    public function show($id)
    {
        $users = User::find($id);
        if (!$users) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        return response()->json($users);
    }
}
