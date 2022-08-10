<?php
declare(strict_types=1);

namespace Domain\User\Factory;

use Domain\User\Models\User;

class UserFactory
{
    public function create(string $email, string $password): User
    {
        $user = new User();
        $user->email = $email;
        $user->password = $password;

        return $user;
    }
}
