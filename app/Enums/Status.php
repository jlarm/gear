<?php

namespace App\Enums;

enum Status: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Sold = 'sold';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Published => 'Published',
            self::Sold => 'Sold',
        };
    }
}
