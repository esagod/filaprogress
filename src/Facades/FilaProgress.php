<?php

namespace Esagod\FilaProgress\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Esagod\FilaProgress\FilaProgress
 */
class FilaProgress extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Esagod\FilaProgress\FilaProgress::class;
    }
}
