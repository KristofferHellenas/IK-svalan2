<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the users from the database
        $users = User::all();
        // $users = DB::table('users')->get();

        // Antal betalande medlemmar 
        $paidUsers = DB::table('users')->where('member_fee', '=', 1)->count();

        $paidyouth = DB::table('users')->whereYear('birthday', '>=', '2002')->where('member_fee', '=', 1)->count();

        $paidadult = DB::table('users')->whereYear('birthday', '<', '2002')->where('member_fee', '=', 1)->count();

        // 300 ungdom 500 vuxen
        $youth = $paidyouth * 300;
        $adult = $paidadult * 500;
        $sum = $adult + $youth;

        return view('users.index', ['users' => $users, 'paidcount' => $paidUsers, 'paidyouth' => $paidyouth, 'paidadult' => $paidadult, 'sum' => $sum]);
    }

    public function user()
    {
        // Get all the users from the database
        $user = User::all();
        // $users = DB::table('users')->get();

        return view('user', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $user->update(['email' => $request->email]);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->firstname = request('first_name');
        $user->lastname = request('last_name');
        $user->birthday = request('birthday');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();

        return redirect('/admin/users')->with('msg', 'A user has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
}
