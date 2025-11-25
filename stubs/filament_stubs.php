<?php
// Lightweight stubs to satisfy static analysis (Intelephense) in the workspace.
// These classes are intentionally minimal and only exist to help the IDE —
// they are NOT used at runtime (the real classes come from vendor/filament/*).

namespace Filament\Support\Icons {
    class Heroicon
    {
        public const OutlinedRectangleStack = 'heroicon-o-rectangle-stack';
    }
}

namespace Filament\Forms {
    // Minimal stub for the `Get` value-access helper used in form closures.
    class Get
    {
        public function __invoke(string $key, $default = null)
        {
            return $default;
        }
    }
}
namespace Filament\Tables {
    class Table
    {
    }
}

namespace Filament\Schemas {
    class Schema
    {
        public function components(array $components = [])
        {
            return $this;
        }
    }
}

namespace Filament\Forms\Components {
    class TextInput
    {
        public static function make(...$args)
        {
            return new self(...$args);
        }

        public function rules($rules)
        {
            return $this;
        }

        public function maxLength(int $n)
        {
            return $this;
        }

        public function numeric()
        {
            return $this;
        }

        public function columnSpanFull()
        {
            return $this;
        }
    }

    class Select
    {
        public static function make(...$args)
        {
            return new self(...$args);
        }

        public function options(array $options)
        {
            return $this;
        }

        public function rules($rules)
        {
            return $this;
        }
    }

    class Textarea
    {
        public static function make(...$args)
        {
            return new self(...$args);
        }

        public function rules($rules)
        {
            return $this;
        }

        public function columnSpanFull()
        {
            return $this;
        }
    }

    class DatePicker
    {
        public static function make(...$args)
        {
            return new self(...$args);
        }
    }
}

namespace Filament\Support\Colors {
    class Color
    {
        public const Indigo = 'indigo';
        public const Amber = 'amber';
        public const Blue = 'blue';
        public const Green = 'green';
        public const Red = 'red';
        public const Zinc = 'zinc';
        public const Black = 'black';
        public const White = 'white';

        public static function isTextContrastRatioAccessible(...$args): bool
        {
            return true;
        }

        public static function isNonTextContrastRatioAccessible(...$args): bool
        {
            return true;
        }

        public static function isLight(...$args): bool
        {
            return true;
        }

        public static function rgb(int $r, int $g, int $b): string
        {
            return "rgb({$r}, {$g}, {$b})";
        }

        public static function toARGB($color): string
        {
            return (string) $color;
        }

        public static function generatePalette($color): array
        {
            return [];
        }
    }
}
