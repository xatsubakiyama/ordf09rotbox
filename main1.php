<?php

require_once 'Board.php';
require_once 'Printer.php';
require_once 'Command/Factory/SimpleCommandFactory.php';

$board = new Board([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);

$factory = new SimpleCommandFactory();




$commandString = 'hkijbglfaced';

for ($i = 0; $i < strlen($commandString); $i++) {
    /** @var CommandInterface $command */
    $command = $factory->createCommand($commandString[$i]);
    $board = $command->execute($board);
}

$printer = new Printer();
$printer->print($board);



