<?php
declare(strict_types=1);

namespace App\User\Controllers;

use App\User\StoreUserRequest;
use Domain\User\DataTransferObjects\UserEntity;
use JetBrains\PhpStorm\NoReturn;
use Support\Serializer\Serializer;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

class StoreController
{
    private Serializer $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @throws ExceptionInterface
     */
    #[NoReturn] public function __invoke(StoreUserRequest $storeUserRequest): void
    {
        $entity = $this->serializer->denormalize($storeUserRequest->all(), UserEntity::class);



        dd($entity);
    }
}
