<?php
namespace App\Controllers;
use App\Core\App;

class UsersController {

    public function index()
    {

        $users = App::get('database')->getAll('users');

        return view('users-index', compact('users'));
    }

    public function create()
    {
        return view('users-create');
    }

    public function store()
    {
        $usersData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('users', $usersData["usersData"]);

        return redirect('/users');
    }

    public function show()
    {
        $user = App::get('database')->getOne('users', $_GET['id']);

        return view('users-show', compact('user'));
    }

    public function edit()
    {
        $user = App::get('database')->getOne('users', $_GET['id']);

        return view('users-edit', compact('user'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('users', $_POST);

        return redirect('/users');
    }

    public function destroy()
    {
        App::get('database')->delete('users', $_GET['id']);

        return redirect('/users');

    }

}