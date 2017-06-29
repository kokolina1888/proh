<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\User;

class UserController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_info');
    }

    /**
     * Store a newly created resource in storage.
     * redirects to home page on success
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $res = session()->get('quizz_res');
        //dd($request->only('fname', 'lname', 'email', 'femail'));
        User::create([
                'fname'     => $request->fname,
                'lname'     => $request->lname,
                'email'     => $request->email,
                'femail'    => $request->femail,
                //TO BE CHANGED
                'phone'     => $res[1],
                ]);


        //
        //FLUSHING/CLEANING THE SESSION ARRAY
        //$request->session()->flush();
        session()->flush();
            return redirect()->route('home');
    }

}
