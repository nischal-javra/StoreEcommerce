<?php

namespace Pfay\Contacts\Model;

class Hello implements \Pfay\Contacts\Api\HelloInterface
{

    public function name($name)
    {
        // TODO: Implement name() method.
        return "Hello, " . $name;
    }
}
