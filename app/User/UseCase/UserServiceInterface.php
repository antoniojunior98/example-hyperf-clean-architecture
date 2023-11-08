<?php
namespace App\User\UseCase;
use App\User\Entity\User;
use App\User\Adapter\UserRepositoryInterface;

interface UserServiceInterface 
{
    public function __construct(UserRepositoryInterface $repositoryInterface);

    public function find(int $id): User;

    public function save(array $data, $id = null): User;
}