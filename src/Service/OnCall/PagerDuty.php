<?php

namespace Shrikeh\PagerRouter\Service\OnCall;

use Shrikeh\PagerDuty\Repository\OnCalls\OnCallsRepository;
use Shrikeh\PagerRouter\Repository\Users;

final class PagerDuty
{
    private $oncalls;

    private $users;

    public function __construct(
      OnCalls $oncalls,
      Users $users
    ) {
        $this->oncalls = $oncalls;
        $this->users = $users;
    }

    public function getUsersOnCall()
    {
        $this->oncalls
    }
}
