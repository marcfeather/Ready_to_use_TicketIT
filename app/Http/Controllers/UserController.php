<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Session;
use DB;

class UserController extends Controller
{
    

    public function index()
    {
        $users = DB::table("users")->get();

        return view('user.seeUser', compact('users'));
    }


    public function destroy($id)
    {
        $user = DB::table('users')->delete($id);

        Session::flash('status', trans('ticketit::lang.users-is-removed-from-team'));

        return redirect('/tickets-admin/users');
    }

}
