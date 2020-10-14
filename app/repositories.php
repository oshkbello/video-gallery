<?php
declare(strict_types=1);

use App\Domain\User\UserRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use App\Domain\Video\VideoRepository;
use App\Infrastructure\Persistence\Video\InMemoryVideoRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository & VideoRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        VideoRepository::class => \DI\autowire(InMemoryVideoRepository::class),
    ]);
};
