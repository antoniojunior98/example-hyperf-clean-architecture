<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    \App\User\UseCase\UserServiceInterface::class => \App\User\UseCase\UserService::class,
    \App\User\Adapter\UserRepositoryInterface::class => \App\User\Adapter\UserRepository::class,
];
