<?php

namespace App\Controllers;

use App\Core\App;

class ApiRecipesController
{

    public function index()
    {
//        $user = api_check_auth();
        $recipes = App::get('database')->getAll('recipes');

        echo json_encode($recipes);
    }


    public function store()
    {
        $recipesData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);
        App::get('database')->insert('recipes', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $recipe = App::get('database')->getOne('recipes', $_GET);

        echo json_encode($recipe);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('recipes', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('recipes', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}