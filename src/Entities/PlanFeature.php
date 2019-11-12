<?php

namespace Sagitarius29\LaravelSubscriptions\Entities;

use Illuminate\Database\Eloquent\Model;
use Sagitarius29\LaravelSubscriptions\PlanFeature as PlanFeatureBase;

class PlanFeature extends PlanFeatureBase
{
    protected $attributes = [
        'is_consumable' => false
    ];

    /**
     * @param  string  $code
     * @param  bool|int  $value
     * @param  int  $sortOrder
     * @param  bool  $isConsumable
     * @return Model
     */
    public static function make(
        string $code,
        bool $isEnabled,
        int $sortOrder = null
    ): Model {
        $attributes = [
            'code' => $code,
            'value' => $isEnabled,
            'sort_order' => $sortOrder,
        ];

        return new self($attributes);
    }


}
