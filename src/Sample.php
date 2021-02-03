<?php

namespace Chanshige\Untitled;

use DateTimeInterface;

class Sample
{
    public function __construct(
        private DateTimeInterface $dateTime
    ) {}

    public function datetime(): DateTimeInterface
    {
        return $this->dateTime;
    }

    public function __toString(): string
    {
        return $this->dateTime->format('Y-m-d');
    }
}
