<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    //
    public function getdata(Request $req){
        $data = new User;

        $data->name = $req->name;
        $data->username = $req->username;
        $data->date = $req->date;
        $data->email = $req->email;
        $data->phonenumber = $req->phonenumber;
        $data->nic = $req->nic;
        $data->gender = $req->gender;
        $data->password = $req->password;
        $data->re_password = $req->re_password;

        $data->save();

        return redirect('form');

    }

    public function fetchdata(){
        $data = User::all();
        return view('fetch',['detail'=>$data]);
    }
}
