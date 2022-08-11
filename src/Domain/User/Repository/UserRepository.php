<?php
declare(strict_types=1);

namespace Domain\User\Repository;

use Domain\User\Factory\UserFactory;
use Domain\User\Models\User;
use Support\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    private UserFactory $userFactory;

    public function __construct(User $model, UserFactory $userFactory)
    {
        $this->model = $model;
        $this->userFactory = $userFactory;
    }

    public function store(string $name, string $email, string $password): User
    {
        return $this->userFactory->create($name, $email, $password);
    }
}
