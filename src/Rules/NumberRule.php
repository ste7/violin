<?php

namespace Violin\Rules;

use Violin\Contracts\RuleContract;

class NumberRule implements RuleContract
{
    public function run($value, $input, $args)
    {
        return is_numeric($value);
    }
}
