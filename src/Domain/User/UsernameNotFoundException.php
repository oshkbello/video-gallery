<?php
declare(strict_types=1);

namespace App\Domain\User;

use App\Domain\DomainException\DomainRecordNotFoundException;


//This handles the message sent to the user trying to log in when the username is not found
class UsernameNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'Sorry, that username is not found';
}
