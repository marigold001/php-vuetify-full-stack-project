<?php

namespace App\Controllers;

use App\Core\App;

class ApiFeaturedRecipesController
{

    public function index()
    {
//        $user = api_check_auth();
        $featured_recipes = App::get('database')->getAll('featured_recipes');

        echo json_encode($featured_recipes);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('featured_recipes', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $featured_recipe = App::get('database')->getOne('featured_recipes', $_GET);

        echo json_encode($featured_recipe);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('featured_recipes', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('featured_recipes', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}