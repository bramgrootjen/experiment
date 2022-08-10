<?php
declare(strict_types=1);

namespace Support\Enum;

class Rules
{
    public const REQUIRED = 'required';
    public const STRING = 'string';
    public const CONFIRMED = 'confirmed';

    public const MIN_LENGTH_6 = 'min:6';

    public const MAX_LENGTH_25 = 'max:25';
    public const MAX_LENGTH_255 = 'max:255';
}
