<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/08
 * Time: 14:46
 */

interface CommandInterface
{
    public function execute(Board $board): Board;
}
