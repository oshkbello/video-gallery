<?php
declare(strict_types=1);

namespace App\Domain\Video;

use App\Domain\DomainException\DomainRecordNotFoundException;

//This handles the message sent to the user when searching for a video that isnt in the system
class VideoNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'The video you requested does not exist.';
}
