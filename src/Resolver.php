<?php declare(strict_types=1);

namespace Jorpo\Resolution;

/**
 * @template TObject of object
 */
interface Resolver
{
    /**
     * @param class-string<TObject> $specification
     * @return TObject
     */
    public function resolve(string $specification): object;
}
