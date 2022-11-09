<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'entities' => [
        'user' => \App\Models\User::class,
        'plan' => \Devrheber\LaravelSubscriptions\Entities\Plan::class,
        'plan_feature' => \Devrheber\LaravelSubscriptions\Entities\PlanFeature::class,
        'plan_interval' => \Devrheber\LaravelSubscriptions\Entities\PlanInterval::class,
        'plan_subscription' => \Devrheber\LaravelSubscriptions\Entities\Subscription::class,
    ],
    'default_features' => [
        'features' => [
            //'is_featured_clinic' => true
        ],
        'consumables' => [
            // Consumables
            //'number_of_contacts' => 5,
        ],
    ],
];
