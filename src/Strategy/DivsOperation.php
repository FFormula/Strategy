<?php
/**
 * Created by PhpStorm.
 * User: fform
 * Date: 09.08.2018
 * Time: 20:51
 */

namespace Volosatov\Strategy;

class DivsOperation implements OperationInterface
{
    /**
     * @param int $a First number
     * @param int $b Second number
     * @return int division a / b
     * @throws \Exception if there is division by zero
     */
    public function calc(int $a, int $b): int
    {
        if (!$b)
            throw new \Exception("Division by zero");
        return floor ($a / $b);
    }
}