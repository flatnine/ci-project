<?php

namespace Flatnine;

class FriendlyTime extends \DateTime
{
    public function getFriendlyTime()
    {
	return sprintf("It's only %s", $this->format("Y-m-d"));
    }
}
