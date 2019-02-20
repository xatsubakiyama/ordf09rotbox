<?php

require_once 'Board.php';
require_once 'Printer.php';
require_once 'Command/Factory/NormalCommand3_3Factory.php';



$board = new Board([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);

//$commands = array(
//    'a' => new RowShiftCommand(0, new ShiftFirstToLastConverter()),
//    'b' => new RowShiftCommand(1, new ShiftFirstToLastConverter()),
//    'c' => new RowShiftCommand(2, new ShiftFirstToLastConverter()),
//    'd' => new ColumnShiftCommand(0, new ShiftLastToFirstConverter()),
//    'e' => new ColumnShiftCommand(1, new ShiftLastToFirstConverter()),
//    'f' => new ColumnShiftCommand(2, new ShiftLastToFirstConverter()),
//    'g' => new RowShiftCommand(2, new ShiftLastToFirstConverter()),
//    'h' => new RowShiftCommand(1, new ShiftLastToFirstConverter()),
//    'i' => new RowShiftCommand(0, new ShiftLastToFirstConverter()),
//    'j' => new ColumnShiftCommand(2, new ShiftFirstToLastConverter()),
//    'k' => new ColumnShiftCommand(1, new ShiftFirstToLastConverter()),
//    'l' => new ColumnShiftCommand(0, new ShiftFirstToLastConverter()),
//);

$factory = new NormalCommand3_3Factory();

$commandString = 'd';

for ($i = 0; $i < strlen($commandString); $i++) {
    /** @var CommandInterface $command */
    $command = $factory->createCommand($commandString[$i]);
    $board = $command->execute($board);
}


$printer = new Printer();
$printer->print($board);
