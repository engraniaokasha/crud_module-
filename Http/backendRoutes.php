<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/crud'], function (Router $router) {
    $router->bind('user', function ($id) {
        return app('Modules\Crud\Repositories\UserRepository')->find($id);
    });
    $router->get('users', [
        'as' => 'admin.crud.user.index',
        'uses' => 'UserController@index',
        'middleware' => 'can:crud.users.index'
    ]);
    $router->get('users/create', [
        'as' => 'admin.crud.user.create',
        'uses' => 'UserController@create',
        'middleware' => 'can:crud.users.create'
    ]);
    $router->post('users', [
        'as' => 'admin.crud.user.store',
        'uses' => 'UserController@store',
        'middleware' => 'can:crud.users.create'
    ]);
    $router->get('users/{user}/edit', [
        'as' => 'admin.crud.user.edit',
        'uses' => 'UserController@edit',
        'middleware' => 'can:crud.users.edit'
    ]);
    $router->put('users/{user}', [
        'as' => 'admin.crud.user.update',
        'uses' => 'UserController@update',
        'middleware' => 'can:crud.users.edit'
    ]);
    $router->delete('users/{user}', [
        'as' => 'admin.crud.user.destroy',
        'uses' => 'UserController@destroy',
        'middleware' => 'can:crud.users.destroy'
    ]);
// append

});
