<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\User\LoginUserAction;
use App\Application\Actions\Video\ListVideoAction;
use App\Application\Actions\Video\ViewVideoAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    //route for user related actions: List users, login user, view a particular user given a unique ID
    // The verb associated to a particular route (GET, POST) is determined by the nature of action.
    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
        $group->post('/login', LoginUserAction::class);
    });

    //route for vide related actions: List videos and to get a 
    //particular video information using a unique video ID
    $app->group('/videos', function (Group $group) {
        $group->get('', ListVideoAction::class);
        $group->get('/{video_id}', ViewVideoAction::class);
    });
    
};
