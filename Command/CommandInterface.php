<?php

require_once __DIR__.'/../Board.php';

interface CommandInterface
{
    public function execute(Board $board): Board;
}
