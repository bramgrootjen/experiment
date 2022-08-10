<?php
declare(strict_types=1);

namespace Domain\User\DataTransferObjects;

use App\User\StoreUserRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserEntity
{
    public string $name;
    public string $email;
    public string $password;
}
