<?php
declare(strict_types=1);

namespace App\Domain\Video;


//This is the interface that acts as our database to hold the videos that will be used in  the website
interface VideoRepository
{
    /**
     * @return Video[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Video
     * @throws VideoNotFoundException
     */
    public function findVideoOfId(int $id): Video;

    /**
     * @param string $title
     * @return Video
     * @throws VideoNotFoundException
     */
    public function findVideoOfTitle(string $title): Video;

    /**
     * @param string $video_id
     * @return Video
     * @throws VideoNotFoundException
     */
    public function findVideoOfVideoId(string $video_id): Video;
}
