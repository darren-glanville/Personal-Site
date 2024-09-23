<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ProjectStatus: string implements HasLabel, HasColor
{
    case InProgress = 'in-progress';
    case Completed  = 'completed';
    case OnGoing    = 'on-going';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::InProgress => 'In progress',
            self::Completed  => 'Completed',
            self::OnGoing    => 'Ongoing',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::InProgress => 'warning',
            self::Completed  => 'success',
            self::OnGoing    => 'info',
        };
    }
}
