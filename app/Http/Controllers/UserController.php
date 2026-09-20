<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mando a la vista los camareros para iniciar turno
    public function index()
    {
        $users = User::query()->orderBy('role')->get();

        return view('welcome', compact('users'));
    }
}
