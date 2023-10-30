<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthUser extends Controller
{
    public function loginme(Request $request){
               $validated = $request->validate(
                [
                    'email' => ['required', 'email'],
                    'password'=>  ['required', 'min:6']
                    ]
                );
    }
}
