<?php

namespace Devrheber\LaravelSubscriptions\Traits;

use Illuminate\Database\Eloquent\Model;
use Devrheber\LaravelSubscriptions\Contracts\PlanIntervalContract;

trait HasSingleInterval
{
    public function setInterval(Model $interval): PlanIntervalContract
    {
        $intervalLoaded = $this->getInterval();

        if ($intervalLoaded == null) {
            return $this->intervals()->save($interval);
        }

        $intervalLoaded->fill($interval->toArray());
        $intervalLoaded->save();

        return $intervalLoaded;
    }

    public function getInterval(): ?PlanIntervalContract
    {
        return $this->intervals()->first();
    }
}
