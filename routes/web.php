<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'candidate'], function () use ($router) //serve candidates prefix
{
    $router->get('/', 'CandidateController@index');
    $router->get('{/id}', 'CandidateController@show');
    $router->post('/', 'CandidateController@add');
    $router->put('/{id}', 'CandidateController@edit');
    $router->delete('/{id}', 'CandidateController@delete');


});

$router->group(['prefix' => 'education'], function () use ($router) //serve education prefix
{
    $router->get('/', 'EducationHistoryController@index');
    $router->get('/{candidateId}', 'EducationHistoryController@show');
    $router->post('/', 'EducationHistoryController@add');
    $router->put('/{candidateId}/{id}', 'EducationHistoryController@edit');
    $router->delete('/{candidateId}/{id}', 'EducationHistoryController@delete');
});

$router->group(['prefix' => 'reference'], function () use ($router) //serve reference prefix
{
    $router->get('/', 'ReferenceController@index');
    $router->get('/{candidateId}', 'ReferenceController@show');
    $router->post('/', 'ReferenceController@add');
    $router->put('/{candidateId}/{id}', 'ReferenceController@edit');
    $router->delete('/{candidateId}/{id}', 'ReferenceController@delete');
});

$router->group(['prefix' => 'portfolio'], function () use ($router) //serve portfolio prefix
{
    $router->get('/', 'PortfolioController@index');
    $router->get('/{candidateId}', 'PortfolioController@show');
    $router->post('/', 'PortfolioController@add');
    $router->put('/{candidateId}/{id}', 'PortfolioController@edit');
    $router->delete('/{candidateId}/{id}', 'PortfolioController@delete');
});


$router->group(['prefix' => 'publication'], function () use ($router) //serve publication prefix
{
    $router->get('/', 'PublicationController@index');
    $router->get('/{candidateId}', 'PublicationController@show');
    $router->post('/', 'PublicationController@add');
    $router->put('/{candidateId}/{id}', 'PublicationController@edit');
    $router->delete('/{candidateId}/{id}', 'PublicationController@delete');
});

$router->group(['prefix' => 'work_experience'], function () use ($router) //serve publication prefix
{
    $router->get('/', 'WorkExperienceController@index');
    $router->get('/{candidateId}', 'WorkExperienceController@show');
    $router->post('/', 'WorkExperienceController@add');
    $router->put('/{candidateId}/{id}', 'WorkExperienceController@edit');
    $router->delete('/{candidateId}/{id}', 'WorkExperienceController@delete');
});