<?php declare(strict_types=1);

namespace Jorpo\Resolution;

class MyClass
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
