<?php
namespace App\Controllers;
use App\Core\App;

class RecipesController {

    public function index()
    {
        $recipes = App::get('database')->getAll('recipes');

        return view('recipes-index', compact('recipes'));
    }

    public function create()
    {
        return view('recipes-create');
    }

    public function store()
    {
        $recipesData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('recipes', $_POST);
        return redirect('/recipes');
    }

    public function show()
    {
        $recipe = App::get('database')->getOne('recipes', $_GET['id']);

        return view('recipes-show', compact('recipe'));
    }

    public function edit()
    {
        $recipe = App::get('database')->getOne('recipes', $_GET['id']);

        return view('recipes-edit', compact('recipe'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('recipes', $_POST);

        return redirect('/recipes');
    }

    public function destroy()
    {
        App::get('database')->delete('recipes', $_GET['id']);

        return redirect('/recipes');

    }
    
}