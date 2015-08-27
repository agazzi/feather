<?php

namespace Feather\Bundle\ServiceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FeatherServiceBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
