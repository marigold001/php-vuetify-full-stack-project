<?php
//
//$router->register([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'about/culture' => 'controllers/about.culture.php',
//    'contact' => 'controllers/contact.php',
//    'api/tasks' => 'controllers/api.tasks.php',
//    'contact-submit' => 'controllers/contact.submit.php'
//
//]);
//
//$routes = [
//    'GET' => ['' => 'controllers/index.php',
//        'about' => 'controllers/about.php',
//        'about/culture' => 'controllers/about.culture.php',
//        'contact' => 'controllers/contact.php',
//        'api/tasks' => 'controllers/api.tasks.php',
//    ],
//    'POST' => [
//        'contact-submit' => 'controllers/contact.submit.php'
//    ]
//];
//
$router->get('login', 'AuthController@login_form');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@register_form');
$router->post('register', 'AuthController@register');
$router->get('logout', 'AuthController@logout');

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

//POSTS
$router->get('posts', 'PostsController@index');
$router->get('posts/create', 'PostsController@create');
$router->post('posts', 'PostsController@store');
$router->get('posts/show', 'PostsController@show');
$router->get('posts/edit', 'PostsController@edit');
$router->post('posts/edit', 'PostsController@update');
$router->get('posts/destroy', 'PostsController@destroy');

//RECIPES
$router->get('recipes', 'RecipesController@index');
$router->get('recipes/create', 'RecipesController@create');
$router->post('recipes', 'RecipesController@store');
$router->get('recipes/show', 'RecipesController@show');
$router->get('recipes/edit', 'RecipesController@edit');
$router->post('recipes/edit', 'RecipesController@update');
$router->get('recipes/destroy', 'RecipesController@destroy');

//USERS
$router->get('users', 'UsersController@index');
$router->get('users/create', 'UsersController@create');
$router->post('users', 'UsersController@store');
$router->get('users/show', 'UsersController@show');
$router->get('users/edit', 'UsersController@edit');
$router->post('users/edit', 'UsersController@update');
$router->get('users/destroy', 'UsersController@destroy');

//COOKBOOKS
$router->get('cookbooks', 'CookbooksController@index');
$router->get('cookbooks/create', 'CookbooksController@create');
$router->get('cookbooks/show', 'CookbooksController@show');
$router->get('cookbooks/edit', 'CookbooksController@edit');
$router->post('cookbooks/edit', 'CookbooksController@update');
$router->get('cookbooks/destroy', 'CookbooksController@destroy');

//API POSTS
$router->get('api/posts', 'ApiPostsController@index');
$router->post('api/posts', 'ApiPostsController@store');
//API RECIPES
$router->get('api/recipes', 'ApiRecipesController@index');
$router->post('api/recipes', 'ApiRecipesController@store');
//API COOKBOOKS
$router->get('api/cookbooks', 'ApiCookbooksController@index');
$router->post('api/cookbooks', 'ApiCookbooksController@store');
//API FEATURED RECIPES
$router->get('api/featured_recipes', 'ApiFeaturedRecipesController@index');
$router->post('api/featured_recipes', 'ApiFeaturedRecipesController@store');

$router->post('contact-submit', 'PagesController@contactFormSubmit');
