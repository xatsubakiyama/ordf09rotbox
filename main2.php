<?php

require_once 'Board.php';
require_once 'Command/Command_A.php';
require_once 'Command/Command_B.php';
require_once 'Command/Command_C.php';
require_once 'Command/Command_D.php';
require_once 'Command/Command_E.php';
require_once 'Command/Command_F.php';
require_once 'Command/Command_G.php';
require_once 'Command/Command_H.php';
require_once 'Command/Command_I.php';
require_once 'Command/Command_J.php';
require_once 'Command/Command_K.php';
require_once 'Command/Command_L.php';


$board = new Board([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);

$commands = array(
    'a' => new Command_A(),
    'b' => new Command_B(),
    'c' => new Command_C(),
    'd' => new Command_D(),
    'e' => new Command_E(),
    'f' => new Command_F(),
    'g' => new Command_G(),
    'h' => new Command_H(),
    'i' => new Command_I(),
    'j' => new Command_J(),
    'k' => new Command_K(),
    'l' => new Command_L(),
);




$commandString = 'hkijbglfaced';

for ($i = 0; $i < strlen($commandString); $i++) {
    /** @var CommandInterface $command */
    $command = $commands[$commandString[$i]];
    $board = $command->execute($board);
}


var_dump($board);
