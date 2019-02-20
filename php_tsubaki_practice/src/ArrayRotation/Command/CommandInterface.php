<?php

namespace Tsubakiyama\PhpPracticePackage\ArrayRotation\Command;


use Tsubakiyama\PhpPracticePackage\ArrayRotation\Board;


interface CommandInterface
{
    public function execute(Board $board): Board;
}
