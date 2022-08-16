<?php
declare(strict_types=1);

namespace Domain\User\Repository;

use Domain\User\Factory\UserFactory;
use Domain\User\Models\User;
use Support\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct(private readonly UserFactory $userFactory)
    {
    }

    public function store(string $name, string $email, string $password): User
    {
        return $this->userFactory->create(name: $name, email: $email, password: $password);
    }
}
