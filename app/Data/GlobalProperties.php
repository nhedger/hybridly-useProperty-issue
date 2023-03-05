<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class GlobalProperties extends Data
{
    public function __construct(public readonly SecurityData $security) {}
}
