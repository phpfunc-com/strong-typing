<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 26.01.2019
 * Time: 09:37
 */

namespace Phpfunc\Operation;

use Phpfunc\ExecuteInterface;
use Phpfunc\OperationAbstract;

interface ReadInterface
{
    public function read();
    public function execute();
}