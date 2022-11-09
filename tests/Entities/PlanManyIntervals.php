<?php

namespace Devrheber\LaravelSubscriptions\Tests\Entities;

use Devrheber\LaravelSubscriptions\Plan;
use Devrheber\LaravelSubscriptions\Traits\HasManyIntervals;

class PlanManyIntervals extends Plan
{
    use HasManyIntervals;
}
