<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

// Login API logic to handle every login activities on our websites.
class LoginUserAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    { 
        //Receives the request from nuxt using axios. Request will contain data Username
        $body = $this->request->getParsedBody();
        $userName = $body['username'];

        //Search for the username in the UserRepository 
        $user = $this->userRepository->findUserOfUsername($userName);

        $this->logger->info("User of username `${userName}` was viewed.");
        
        //and if username is found, it returns a 200 OK status code, 
        // if username is not found a 404 status code with a "Username not found" is returned.
        return $this->respondWithData($user);
       
    }
}
