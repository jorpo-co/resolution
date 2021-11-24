<?php declare(strict_types=1);

namespace Jorpo\Resolution;

use Auryn\Injector;

/**
 * @template TObject of object
 * @implements Resolver<TObject>
 */
abstract class AurynResolver implements Resolver
{
    private Injector $injector;

    public function __construct(Injector $injector)
    {
        $this->injector = $injector;
    }

    public function resolve(string $specification): object
    {
        return $this->injector->make($specification);
    }
}
