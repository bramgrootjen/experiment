<?php

declare(strict_types=1);

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function ddd(): void
{
    dd( debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 1));
}
