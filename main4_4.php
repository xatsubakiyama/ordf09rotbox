<?php
/**
 * Created by PhpStorm.
 * User: tsubakiyama
 * Date: 2019/02/15
 * Time: 14:37
 */

require_once 'Board.php';
require_once 'Printer.php';
require_once 'Command/Factory/NormalCommand4_4Factory.php';

$initialBoard = new Board([
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16],
]);

$factory = new NormalCommand4_4Factory();
$printer = new Printer();

$commandString = '';

if($commandString == NULL)
{
    $printer->print($initialBoard);

}else {
    for ($i = 0; $i < strlen($commandString); $i++) {
        /** @var CommandInterface $command */
        $command = $factory->createCommand($commandString[$i]);
        $finalBoard = $command->execute($initialBoard);
    }

    $printer->print($finalBoard);
}

