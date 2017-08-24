<?php

namespace ISETSO\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ISETSOUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
