<?php

namespace Shrikeh\PagerRouter\Collection;

use IteratorIterator;
use Shrikeh\PagerRouter\User;
use Shrikeh\PagerRouter\Collection;

final class Rota extends IteratorIterator implements Collection
{
    use \Shrikeh\Collection\NamedConstructorsTrait;
    use \Shrikeh\Collection\ImmutableCollectionTrait;
    use \Shrikeh\Collection\ClosedOuterIteratorTrait;
    use \Shrikeh\Collection\OuterIteratorTrait;
    use \Shrikeh\Collection\ObjectStorageTrait;

    private function append(RotaEntity $rota)
    {

    }
}
