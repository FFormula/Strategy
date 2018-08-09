<?php
/**
 * Created by PhpStorm.
 * User: fform
 * Date: 09.08.2018
 * Time: 20:45
 */

namespace Volosatov\Strategy;

class PlusOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}