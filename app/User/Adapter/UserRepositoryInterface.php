<?php

namespace App\User\Adapter;

use App\User\Entity\User;

interface UserRepositoryInterface {

    public function findById(int $id): User;

    public function update(int $id, array $data): User;

    public function create(array $data): User;
}