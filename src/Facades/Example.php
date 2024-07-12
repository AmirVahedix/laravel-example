<?php

namespace AmirVahedix\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AmirVahedix\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AmirVahedix\Example\Example::class;
    }
}
