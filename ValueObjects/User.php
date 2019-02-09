<?php

namespace Modules\Crud\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class User
{
    public function __construct()
    {
        // Implement stub method
    }

    public function __toString()
    {
        return ''; // Implement stub method
    }
}
