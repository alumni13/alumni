<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AdminController extends Controller
{
    public function viewusers()
    {
        $data=User::all();

        if(Auth::user()->usertype== '1')
        {
        return view('admin.viewusers',compact('data'));
        }

        else
        {
            return view('user.home');
        }

        
        
    }


    public function redirect()
    {

        if(Auth::user()->usertype== '0');
        {
            return view('user.home');
        }




    }

    public function updateuser($id)
    {
        $input = user::find($id);
        return view('admin.update_user',compact('input'));
    }

    

    public function edituser(Request $request , $id)
    {
        $input = user::find($id);
       

        $user->save();
        return redirect()->back();



    }

}
 