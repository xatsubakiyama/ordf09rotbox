<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 19:02
 */

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\Factory;

use Tsubakiyama\PhpPracticePackage\ArrayRotation\Command\CommandInterface;

interface FactoryInterface
{
    public function createCommand(string $commandName): CommandInterface;
}
