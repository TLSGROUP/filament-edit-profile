<?php

namespace DtcOnline\FilamentEditProfile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DtcOnline\FilamentEditProfile\FilamentEditProfile
 */
class FilamentEditProfile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DtcOnline\FilamentEditProfile\FilamentEditProfile::class;
    }
}
