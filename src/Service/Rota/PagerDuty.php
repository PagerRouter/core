<?php

namespace Shrikeh\PagerRouter\Service\Rota;

use Shrikeh\PagerRouter\Service\Rota;
use Shrikeh\PagerDuty\Repository\OnCalls;
use Shrikeh\PagerDuty\Repository\Users;

final class PagerDuty implements Rota
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

    public function getOnCallRota()
    {
        $this->oncalls->get();
    }
}
