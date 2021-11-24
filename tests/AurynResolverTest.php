<?php declare(strict_types=1);

namespace Jorpo\Resolution;

use Auryn\Injector;
use PHPUnit\Framework\TestCase;
use StdClass;

class AurynResolverTest extends TestCase
{
    public function testThatResolverCanResolveObjectInstance()
    {
        $resolver = new MyClassAurynResolver(
            new Injector
        );

        $instance = $resolver->resolve(StdClass::class);

        $this->assertInstanceOf(StdClass::class, $instance);
    }

    public function testThatResolverCanResolveMoreComplexClass()
    {
        $injector = new Injector;
        $injector->delegate(
            MyClass::class,
            function () {
                return new MyClass('badgers');
            }
        );
        $resolver = new MyClassAurynResolver(
            $injector
        );

        $instance = $resolver->resolve(MyClass::class);

        $this->assertInstanceOf(MyClass::class, $instance);
        $this->assertSame('badgers', $instance->value());
    }
}
