<?php

declare(strict_types=1);

namespace App\User\Entity;

use Hyperf\DbConnection\Model\Model;

/**
 */
class User extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'user';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = ['first_name', 'last_name', 'email', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}
