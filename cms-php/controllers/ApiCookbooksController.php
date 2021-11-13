<?php

namespace App\Controllers;

use App\Core\App;

class ApiCookbooksController
{

    public function index()
    {
//        $user = api_check_auth();
        $cookbooks = App::get('database')->getAll('cookbooks');

        echo json_encode($cookbooks);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('cookbooks', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $cookbook = App::get('database')->getOne('cookbooks', $_GET);

        echo json_encode($cookbook);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('cookbooks', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('cookbooks', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}