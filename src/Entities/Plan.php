<?php

namespace Devrheber\LaravelSubscriptions\Entities;

use Sagitarius29\LaravelSubscriptions\Plan as PlanBase;
use Sagitarius29\LaravelSubscriptions\Traits\HasSingleInterval;

class Plan extends PlanBase
{
    use HasSingleInterval;
}
