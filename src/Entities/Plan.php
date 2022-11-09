<?php

namespace Devrheber\LaravelSubscriptions\Entities;

use Devrheber\LaravelSubscriptions\Plan as PlanBase;
use Devrheber\LaravelSubscriptions\Traits\HasSingleInterval;

class Plan extends PlanBase
{
    use HasSingleInterval;
}
