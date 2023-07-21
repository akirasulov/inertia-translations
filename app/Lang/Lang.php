<?php

namespace App\Lang;

enum Lang: string
{
    case EN = 'en';

    case RU = 'ru';

    case TJ = 'tj';

    public function label(): string
    {
        return match ($this) {
            self::EN => 'English',

            self::RU => 'Russian',

            self::TJ => 'Tajik',
        };
    }
}
