<?php
declare(strict_types=1);

namespace App\User\Controllers;

use App\User\Request\Entity\UserEntity;
use App\User\Request\StoreUserRequest;
use Domain\User\Repository\UserRepository;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use Support\Serializer\Serializer;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class StoreController
{
    public function __construct(
        private readonly Serializer $serializer,
        private readonly UserRepository $userRepository
    ) {
    }

    /**
     * @throws ExceptionInterface
     */
    public function __invoke(StoreUserRequest $storeUserRequest): JsonResponse
    {
        $userEntity = $this->serializer->denormalize(
            data: $storeUserRequest->all(),
            classname: UserEntity::class
        );

        $this->userRepository->store(
            name: $userEntity->name,
            email: $userEntity->email,
            password: $userEntity->password
        );

        return response()->json(
            data: null,
            status: Http::ACCEPTED->value
        );
    }
}
