<?php

class UserController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('user',compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users',[
            "name" => $_POST['name']
        ]);

        return redirect('user');
    }
}
