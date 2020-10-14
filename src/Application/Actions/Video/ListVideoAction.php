<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use Psr\Http\Message\ResponseInterface as Response;

class ListVideoAction extends VideoAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {   
        // This returns all the available video in the Video Repository
        $videos = $this->videoRepository->findAll();

        $this->logger->info("Video list was viewed.");

        //Returns the videos in a JSON format
        return $this->respondWithData($videos);
    }
}
