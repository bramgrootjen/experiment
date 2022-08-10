<?php
declare(strict_types=1);

namespace Domain\User\DataTransferObjects;

use App\User\StoreUserRequest;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserDTO extends DataTransferObject
{
    private const NAME = 'name';
    private const EMAIL = 'email';
    private const PASSWORD = 'password';

    public ?string $name = null;
    public ?string $email = null;
    public ?string $password = null;

    /**
     * @throws UnknownProperties
     */
    public function fromRequest(StoreUserRequest $request):UserDTO
    {
        return new UserDTO(
            name: $request->input(self::NAME),
            email: $request->input(self::EMAIL),
            password: $request->input(self::PASSWORD)
        );
    }
}
