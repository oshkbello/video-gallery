<?php
declare(strict_types=1);

namespace App\Application\Actions\Video;

use Psr\Http\Message\ResponseInterface as Response;


//This API handles all request from nuxt for a single video information
class ViewVideoAction extends VideoAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        //recieves a request from nuxt that contain a unique video Id
        $videoId = (string) $this->resolveArg('video_id');

        //Find the video in the Video Repository using the uniqe video_id
        $video = $this->videoRepository->findVideoOfVideoId($videoId);

        $this->logger->info("Video of Id `${videoId}` was viewed.");

        //if the video is found, it returns a 200 OK status code along with video information
        //in JSON format. If not found, it returns a 404 status code with a message "Video not found"
        return $this->respondWithData($video);
    }
}
