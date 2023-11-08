<?php

namespace App\User\Adapter;
use App\User\Entity\User;
use App\User\Adapter\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function findById(int $id): User
    {
        return User::query()->find($id);
    }

    public function update(int $id, array $data): User
    {   
        $user = User::where('id', $id)->first();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->save();

        return $user;
    }

    public function create(array $data): User
    {
        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->save();
        
        return $user;
    }
}