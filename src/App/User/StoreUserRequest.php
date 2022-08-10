<?php
declare(strict_types=1);

namespace App\User;

use Illuminate\Foundation\Http\FormRequest;
use Support\Enum\Rules;

class StoreUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => [Rules::REQUIRED, Rules::STRING, Rules::MAX_LENGTH_255, 'unique:users,name'],
            'email' => [Rules::REQUIRED, Rules::STRING, Rules::MAX_LENGTH_255, 'unique:users,email'],
            'password' => [Rules::REQUIRED, Rules::STRING, Rules::MAX_LENGTH_25, Rules::MIN_LENGTH_6, Rules::CONFIRMED],
            'password_confirmation' => Rules::REQUIRED
        ];
    }
}
