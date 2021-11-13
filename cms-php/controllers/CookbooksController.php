<?php
namespace App\Controllers;
use App\Core\App;

class CookbooksController {

    public function index()
    {
        $cookbooks = App::get('database')->getAll('cookbooks');

        return view('cookbooks-index', compact('cookbooks'));
    }

    public function create()
    {
        return view('cookbooks-create');
    }

    public function store()
    {
        $cookbooksData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('cookbooks', $cookbooksData['cookbooksData']);

        return redirect('/cookbooks');
    }

    public function show()
    {
        $recipe = App::get('database')->getOne('cookbooks', $_GET['id']);

        return view('cookbooks-show', compact('recipe'));
    }

    public function edit()
    {
        $recipe = App::get('database')->getOne('cookbooks', $_GET['id']);

        return view('cookbooks-edit', compact('recipe'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('cookbooks', $_POST);

        return redirect('/cookbooks');
    }

    public function destroy()
    {
        App::get('database')->delete('cookbooks', $_GET['id']);

        return redirect('/cookbooks');

    }

}