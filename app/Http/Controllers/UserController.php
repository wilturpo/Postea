<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Datetime;
use Jenssegers\Mongodb\Eloquent\Model;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('posts.cuenta',compact('user'));
    }

    public function update(Request $request)
    {
        //$user = Auth::user();
        /*$id = $request->get('id');
        $user = App\User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect('/posts');*/

        $user_id = Auth::id();
        $usuario = User::find($user_id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
     
        if($request->get('status') != null){
            $usuario->status = 0;
        }else{
            $usuario->status = 1;
        }
        $usuario->save();
    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        $user = User::find($id);
        $user->delete();
    }
}
