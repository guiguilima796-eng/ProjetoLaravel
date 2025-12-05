<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\TestWith;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){

        try {
            //code...
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> $request->password
            ]);
            

            return redirect()->route('user.create')->with('success','usuário criado com sucesso!');
        } catch (\Throwable $th) {
            //throw $th;
            // return back()->withInput()->with('error','usuário não cadastrado!');
            return back()->withInput()->with('error', $th->getMessage());

        }
        
    }
}
