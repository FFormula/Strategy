<?php
/**
 * Created by PhpStorm.
 * User: fform
 * Date: 09.08.2018
 * Time: 20:41
 */

namespace Volosatov\Strategy;

interface OperationInterface
{
    public function calc(int $a, int $b): int;
}