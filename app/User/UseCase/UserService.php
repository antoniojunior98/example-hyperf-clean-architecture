<?php

namespace App\User\UseCase;
use App\User\Adapter\UserRepositoryInterface;
use App\User\Entity\User;

class UserService implements UserServiceInterface 
{
    private $repository;

    public function __construct(UserRepositoryInterface $repositoryInterface){
        $this->repository = $repositoryInterface;
    }

    public function find(int $id): User
    {
        return $this->repository->findById($id);
    }

    public function save(array $data, $id = null): User
    {
        if($id){
            return $this->repository->update($id, $data);
        }
        return $this->repository->create($data);
    }
}