<?php

namespace App\Events\UserActivities;

use App\Abstracts\UserActivityEvent;

class PhoneChanged extends UserActivityEvent
{
    /**
     * User activity action
     */
    protected function action(): string
    {
        return 'phone changed';
    }
}
