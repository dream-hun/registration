<?php

namespace App\Models\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum GenderStatus: string implements HasColor, HasLabel
{
    case Male = 'male';
    case Female = 'female';

    public function getLabel(): string
    {
        return match ($this) {
            self::Male => 'Male',
            self::Female => 'Female',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Male => 'info',
            self::Female => 'success',
        };
    }
}
