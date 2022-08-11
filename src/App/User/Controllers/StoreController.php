<?php
declare(strict_types=1);

namespace App\User\Controllers;

use App\User\Request\Entity\UserEntity;
use App\User\Request\StoreUserRequest;
use Domain\User\Repository\UserRepository;
use Illuminate\Http\JsonResponse;
use Support\Serializer\Serializer;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class StoreController
{
    private Serializer $serializer;
    private UserRepository $userRepository;

    public function __construct(Serializer $serializer, UserRepository $userRepository)
    {
        $this->serializer = $serializer;
        $this->userRepository = $userRepository;
    }

    /**
     * @throws ExceptionInterface
     */
    public function __invoke(StoreUserRequest $storeUserRequest): JsonResponse
    {
        $userEntity = $this->serializer->denormalize($storeUserRequest->all(), UserEntity::class);
        $this->userRepository->store($userEntity->name, $userEntity->email, $userEntity->password);

        return response()->json(
            data: null,
            status: Http::ACCEPTED
        );
    }
}
